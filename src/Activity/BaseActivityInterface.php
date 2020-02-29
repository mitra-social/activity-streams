<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

use Mitra\ActivityStreams\ObjectInterface;
use Mitra\ActivityStreams\LinkInterface;

/**
 * @internal
 */
interface BaseActivityInterface extends ObjectInterface
{

    /**
     * Describes one or more entities that either performed or are expected to perform the activity. Any single activity
     * can have multiple actors. The actor MAY be specified using an indirect Link.
     *
     * @return ObjectInterface|LinkInterface
     */
    public function getActor();

    /**
     * Describes the indirect object, or target, of the activity. The precise meaning of the target is largely dependent
     * on the type of action being described but will often be the object of the English preposition "to". For instance,
     * in the activity "John added a movie to his wishlist", the target of the activity is John's wishlist. An activity
     * can have more than one target.
     *
     * @return ObjectInterface|LinkInterface
     */
    public function getTarget();

    /**
     * Describes the result of the activity. For instance, if a particular action results in the creation of a new
     * resource, the result property can be used to describe that new resource.
     *
     * @var ObjectInterface|LinkInterface
     */
    public function getResult();

    /**
     * Describes an indirect object of the activity from which the activity is directed. The precise meaning of the
     * origin is the object of the English preposition "from". For instance, in the activity "John moved an item to
     * List B from List A", the origin of the activity is "List A".
     *
     * @var ObjectInterface|LinkInterface
     */
    public function getOrigin();

    /**
     * Identifies one or more objects used (or to be used) in the completion of an Activity.
     *
     * @var ObjectInterface|LinkInterface
     */
    public function getInstrument();
}
