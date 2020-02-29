<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

/**
 * @internal
 */
interface PageInterface
{

    /**
     * Identifies the Collection to which a CollectionPage objects items belong.
     *
     * @var LinkInterface|CollectionInterface
     */
    public function getPartOf();

    /**
     * In a paged Collection, indicates the next page of items.
     *
     * @var static|LinkInterface
     */
    public function getNext();

    /**
     * In a paged Collection, identifies the previous page of items.
     *
     * @var static|LinkInterface
     */
    public function getPrev();
}
