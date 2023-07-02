<?php

declare(strict_types=1);

namespace OlegDemkiv\CoinMarketCapClient\Api;

class Content extends AbstractApi
{
    /**
     * All `content` endpoints.
     */
    private const CONTENT_LATEST = 'v1/content/latest';
    private const CONTENT_POSTS_TOP = 'v1/content/posts/top';
    private const CONTENT_POSTS_LATEST = 'v1/content/posts/latest';
    private const CONTENT_POSTS_COMMENTS = 'v1/content/posts/comments';

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function latest(array $params = []): array
    {
        return $this->get(self::CONTENT_LATEST, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function postsTop(array $params = []): array
    {
        return $this->get(self::CONTENT_POSTS_TOP, $params);
    }

    /**
     * @param array<string, mixed> $params
     *
     * @return array<string, mixed>
     */
    public function postsLatest(array $params = []): array
    {
        return $this->get(self::CONTENT_POSTS_LATEST, $params);
    }

    /**
     * @return array<string, mixed>
     */
    public function postsComments(int $postId): array
    {
        return $this->get(self::CONTENT_POSTS_COMMENTS, ['post_id' => $postId]);
    }
}
