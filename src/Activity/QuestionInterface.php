<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams\Activity;

use Mitra\ActivityStreams\ObjectInterface;
use Mitra\ActivityStreams\LinkInterface;

/**
 * Represents a question being asked. Question objects are an extension of IntransitiveActivity. That is, the Question
 * object is an Activity, but the direct object is the question itself and therefore it would not contain an object
 * property.
 *
 * Either of the anyOf and oneOf properties MAY be used to express possible answers, but a Question object MUST NOT have
 * both properties.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-question
 */
interface QuestionInterface extends IntransitiveActivityInterface
{

    /**
     * Identifies an exclusive option for a Question. Use of oneOf implies that the Question can have only a single
     * answer. To indicate that a Question can have multiple answers, use anyOf.
     *
     * @var (ActivityStreamsObject|Link)[]
     */
    public function getOneOf();

    /**
     * Identifies an inclusive option for a Question. Use of anyOf implies that the Question can have multiple answers.
     * To indicate that a Question can have only one answer, use oneOf.
     *
     * @var (ActivityStreamsObject|Link)[]
     */
    public function getAnyOf();

    /**
     * Indicates that a question has been closed, and answers are no longer accepted.
     *
     * @var ObjectInterface|LinkInterface|\DateTime|bool
     */
    public function getClosed();
}
