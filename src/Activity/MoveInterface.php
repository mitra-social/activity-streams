<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

/**
 * Indicates that the actor has moved object from origin to target. If the origin or target are not specified, either
 * can be determined by context.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-move
 */
interface MoveInterface extends ActivityInterface
{

}
