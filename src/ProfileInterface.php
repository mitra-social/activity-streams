<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

/**
 * A Profile is a content object that describes another Object, typically used to describe Actor Type objects.
 * The describes property is used to reference the object being described by the profile.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-profile
 */
interface ProfileInterface extends ObjectInterface
{

    /**
     * On a Profile object, the describes property identifies the object described by the Profile.
     *
     * @return ObjectInterface
     */
    public function getDescribes(): ObjectInterface;
}
