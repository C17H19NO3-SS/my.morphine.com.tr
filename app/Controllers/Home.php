<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $projectsPath = APPPATH . 'Data/projects.json';
        $projects = [];

        if (file_exists($projectsPath)) {
            $projects = json_decode(file_get_contents($projectsPath), true);
        }

        return view('portfolio/index', ['projects' => $projects]);
    }

    /**
     * Optional: Sync method to pull latest repos from GitHub
     * Accessible via /sync-repos (need to add to routes)
     */
    public function syncRepos()
    {
        $githubUser = 'C17H19NO3-SS';
        $client = \Config\Services::curlrequest();

        try {
            $response = $client->get("https://api.github.com/users/{$githubUser}/repos?sort=updated&per_page=15", [
                'headers' => [
                    'User-Agent' => 'Morphine-Portfolio-Bot',
                    'Accept'     => 'application/vnd.github.v3+json',
                ]
            ]);

            $repos = json_decode($response->getBody(), true);
            $projects = [];

            foreach ($repos as $repo) {
                if ($repo['fork']) continue;

                $projects[] = [
                    'title'       => ucwords(str_replace(['-', '_'], ' ', $repo['name'])),
                    'description' => $repo['description'] ?? 'No description provided.',
                    'url'         => $repo['html_url'],
                    'icon'        => 'github', // Default icon for sync
                    'tags'        => [$repo['language'] ?? 'Code']
                ];
            }

            file_put_contents(APPPATH . 'Data/projects.json', json_encode($projects, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            
            return $this->response->setJSON(['status' => 'success', 'message' => 'Projects synced from GitHub.']);

        } catch (\Exception $e) {
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
