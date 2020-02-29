<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

/**
 * A Collection is a subtype of Object that represents ordered or unordered sets of Object or Link instances.
 *
 * Refer to the Activity Streams 2.0 Core specification for a complete description of the Collection type.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-collection
 */
interface CollectionInterface extends ObjectInterface
{

    /**
     * A non-negative integer specifying the total number of objects contained by the logical view of the collection.
     * This number might not reflect the actual number of items serialized within the Collection object instance.
     *
     * @return int
     */
    public function getTotalItems(): int;

    /**
     * In a paged Collection, indicates the page that contains the most recently updated member items.
     *
     * @return CollectionPageInterface|LinkInterface
     */
    public function getCurrent();

    /**
     * In a paged Collection, indicates the furthest preceeding page of items in the collection.
     *
     * @return CollectionPageInterface|LinkInterface
     */
    public function getFirst();

    /**
     * In a paged Collection, indicates the furthest proceeding page of the collection.
     *
     * @return CollectionPageInterface|LinkInterface
     */
    public function getLast();

    /**
     * Identifies the items contained in a collection. The items might be ordered or unordered.
     * @return (Object|Link)[]
     */
    public function getItems(): array;
}
