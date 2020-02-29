<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

/**
 * Used to represent ordered subsets of items from an OrderedCollection. Refer to the Activity Streams 2.0 Core for a
 * complete description of the OrderedCollectionPage object.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-orderedcollectionpage
 */
interface OrderedCollectionPageInterface extends OrderedCollectionInterface, PageInterface
{

}
