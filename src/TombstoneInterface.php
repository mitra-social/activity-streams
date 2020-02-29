<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

/**
 * A Tombstone represents a content object that has been deleted. It can be used in Collections to signify that there
 * used to be an object at this position, but it has been deleted.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-tombstone
 */
interface TombstoneInterface extends ObjectInterface
{

    /**
     * On a Tombstone object, the formerType property identifies the type of the object that was deleted.
     *
     * @return ObjectInterface
     */
    public function getFormerType(): ObjectInterface;

    /**
     * On a Tombstone object, the deleted property is a timestamp for when the object was deleted.
     *
     * @return \DateTime
     */
    public function getDeleted(): \DateTime;
}
