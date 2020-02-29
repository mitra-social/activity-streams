<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Actor;

use Mitra\ActivityStreams\ObjectInterface;

/**
 * Describes one or more entities that either performed or are expected to perform the activity. Any single activity
 * can have multiple actors. The actor MAY be specified using an indirect Link (@see LinkInterface).
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-actor
 * @internal
 */
interface ActorInterface extends ObjectInterface
{

}
