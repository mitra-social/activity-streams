<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

/**
 * Indicates that the actor has deleted the object. If specified, the origin indicates the context from which the object
 * was deleted.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-delete
 */
interface DeleteInterface extends ActivityInterface
{

}
