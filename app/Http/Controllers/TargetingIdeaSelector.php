<?php

namespace App\Http\Controllers;
//namespace https://adwords.google.com/api/adwords/o/v201809;

use Illuminate\Http\Request;

class TargetingIdeaSelector extends Controller
{
    public function index()
    {// Print out some information for each targeting idea.
    	$paging = new Paging();
$paging->setStartIndex(0);
$paging->setNumberResults(10);
$selector->setPaging($paging);
    	$page = $targetingIdeaService->get($selector);
$entries = $page->getEntries();
if ($entries !== null) {
    foreach ($entries as $targetingIdea) {
        $data = MapEntries::toAssociativeArray($targetingIdea->getData());
        $keyword = $data[AttributeType::KEYWORD_TEXT]->getValue();
        $searchVolume = ($data[AttributeType::SEARCH_VOLUME]->getValue() !== null)
            ? $data[AttributeType::SEARCH_VOLUME]->getValue() : 0;
        $averageCpc = $data[AttributeType::AVERAGE_CPC]->getValue();
        $competition = $data[AttributeType::COMPETITION]->getValue();
        $categoryIds = ($data[AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue() === null)
            ? $categoryIds = ''
            : implode(
                ', ',
                $data[AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue()
            );
        printf(
            "Keyword with text '%s', average monthly search volume %d, "
            . "average CPC %d, and competition %.2f was found with categories: %s\n",
            $keyword,
            $searchVolume,
            ($averageCpc === null) ? 0 : $averageCpc->getMicroAmount(),
            $competition,
            $categoryIds
        );
    }
}
    }
}
