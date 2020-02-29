<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

/**
 * An IntransitiveActivity that indicates that the actor has arrived at the location. The origin can be used to identify
 * the context from which the actor originated. The target typically has no defined meaning.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-arrive
 */
interface ArriveInterface extends IntransitiveActivityInterface
{

}
