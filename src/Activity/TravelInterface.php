<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

/**
 * Indicates that the actor is traveling to target from origin. Travel is an IntransitiveObject whose actor specifies
 * the direct object. If the target or origin are not specified, either can be determined by context.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-travel
 */
interface TravelInterface extends IntransitiveActivityInterface
{

}
