<?php
declare(strict_types=1);

namespace App\Application\Actions\Category;

use Psr\Http\Message\ResponseInterface as Response;
use App\Application\Actions\Category\CategoryAction;


class ListCategoriesAction extends CategoryAction {
    protected function action(): Response {
        $categories = $this->categoryRepository->findAll();
        $this->logger->info("Categories were served");

        return $this->respondWithData($categories);
    }
}