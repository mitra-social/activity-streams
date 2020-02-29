<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

/**
 * Indicates that the actor is "following" the object. Following is defined in the sense typically used within Social
 * systems in which the actor is interested in any activity performed by or on the object. The target and origin
 * typically have no defined meaning.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-follow
 */
interface FollowInterface extends ActivityInterface
{

}
