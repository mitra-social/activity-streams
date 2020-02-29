<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

/**
 * Instances of IntransitiveActivity are a subtype of Activity representing intransitive actions. The object property
 * is therefore inappropriate for these activities.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-intransitiveactivity
 */
interface IntransitiveActivityInterface extends BaseActivityInterface
{

}
