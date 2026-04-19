<?php

namespace davidjeddy\RssFeed;

use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;

/**
 * This is just an example.
 *
 * @version  0.0.2 Iterated to use with Google Alert RSS feed
 */
class RssReader extends \yii\base\Widget {

    public $channel;
    public $itemView  = 'entry';
    public $pageSize  = 20;
    public $wrapClass = 'rss-wrap';
    public $wrapTag   = 'div';
    public $indexName = 'item';

    public function run() {
        $items = [];
        $xml   = @simplexml_load_file($this->channel); // suppress errors if feed is invalid

        if ($xml === false) {
            return 'Error parsing feed source: ' . $this->channel;
        }

        foreach ($xml->{$this->indexName} as $item) {
            $items[] = $item;
        }

        // @todo Add sorting logic back - DJE : 2016-06-19
        ArrayHelper::multisort($items, function($item) {
            return $item->published;
        }, SORT_ASC);

        // return data to VW as dataProvider
        return $this->render(
            'wrap',
            [
            'dataProvider' => new ArrayDataProvider([
                'allModels'  => $items,
                'pagination' => [
                    'pageSize' => $this->pageSize,
                ],
            ])
        ]);
    }
}
