<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods={"POST"}, name="app_comment_vote")
     */
    public function commentVote($id, $direction, LoggerInterface $log)
    {
        // todo: use id to query db

        if ($direction === 'up')
        {
            $log->info('Voting up!');
            $currentVoteCount = rand(7, 100);
        }
        else // filtered in route
        {
            $log->info('Voting down!');
            $currentVoteCount = rand(0, 5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}