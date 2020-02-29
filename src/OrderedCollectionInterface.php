<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

/**
 * A subtype of Collection in which members of the logical collection are assumed to always be strictly ordered.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-orderedcollectionpage
 */
interface OrderedCollectionInterface extends CollectionInterface
{

}
