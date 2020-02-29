<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

use Psr\Http\Message\UriInterface;

/**
 * Describes an object of any kind. The Object type serves as the base type for most of the other kinds of objects
 * defined in the Activity Vocabulary, including other Core types such as Activity, IntransitiveActivity,
 * Collection and OrderedCollection.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-object
 */
interface ObjectInterface extends TypeInterface
{

    /**
     * An absolute IRI to identify this Object.
     *
     * @return UriInterface|null
     */
    public function getId(): ?UriInterface;

    /**
     * Identifies a resource attached or related to an object that potentially requires special handling. The intent is
     * to provide a model that is at least semantically similar to attachments in email.
     *
     * @return array<static|LinkInterface>
     */
    public function getAttachment();

    /**
     * Identifies one or more entities to which this object is attributed. The attributed entities might not be Actors.
     * For instance, an object might be attributed to the completion of another activity.
     *
     * @return array<static|LinkInterface>
     */
    public function getAttributedTo();

    /**
     * Identifies one or more entities that represent the total population of entities for which the object can
     * considered to be relevant.
     *
     * @return array<static|LinkInterface>
     */
    public function getAudience();

    /**
     * The content or textual representation of the Object encoded as a JSON string. By default, the value of content
     * is HTML. The mediaType property can be used in the object to indicate a different content type.
     *
     * The content MAY be expressed using multiple language-tagged values.
     *
     * @return string|string[]
     */
    public function getContent();

    /**
     * Identifies the context within which the object exists or an activity was performed.
     *
     * The notion of "context" used is intentionally vague. The intended function is to serve as a means of grouping
     * objects and activities that share a common originating context or purpose. An example could be all activities
     * relating to a common project or event.
     *
     * @return static|LinkInterface
     */
    public function getContext();

    /**
     * A simple, human-readable, plain-text name for the object. HTML markup MUST NOT be included. The name MAY be
     * expressed using multiple language-tagged values.
     *
     * @return string|string[]
     */
    public function getName();

    /**
     * The date and time describing the actual or expected ending time of the object. When used with an Activity object,
     * for instance, the endTime property specifies the moment the activity concluded or is expected to conclude.
     *
     * @return \DateTime (format "c")
     */
    public function getEndTime();

    /**
     * The date and time at which the object was published
     *
     * @return \DateTime
     */
    public function getGenerator(): ?\DateTime;

    /**
     * Indicates an entity that describes an icon for this object. The image should have an aspect ratio of one
     * (horizontal) to one (vertical) and should be suitable for presentation at a small size.
     *
     * @return array<ImageInterface|LinkInterface>
     */
    public function getIcon();

    /**
     * Indicates an entity that describes an image for this object. Unlike the icon property, there are no aspect ratio
     * or display size limitations assumed.
     *
     * @return array<ImageInterface|LinkInterface>
     */
    public function getImage();

    /**
     * Indicates one or more entities for which this object is considered a response.
     *
     * @return static|LinkInterface
     */
    public function getInReplyTo();

    /**
     * Indicates one or more physical or logical locations associated with the object.
     *
     * @return static|LinkInterface
     */
    public function getLocation();

    /**
     * Identifies an entity that provides a preview of this object.
     *
     * @return static|LinkInterface
     */
    public function getPreview();

    /**
     * The date and time at which the object was published (@todo difference to generator?)
     *
     * @return \DateTime (format "c")
     */
    public function getPublished();

    /**
     * Identifies a Collection containing objects considered to be responses to this object.
     *
     * @return CollectionInterface
     */
    public function getReplies();

    /**
     * The date and time describing the actual or expected starting time of the object. When used with an Activity
     * object, for instance, the startTime property specifies the moment the activity began or is scheduled to begin.
     *
     * @return \DateTime (format "c")
     */
    public function getStartTime();

    /**
     * A natural language summarization of the object encoded as HTML. Multiple language tagged summaries MAY be
     * provided.
     *
     * @return string|string[]
     */
    public function getSummary();

    /**
     * One or more "tags" that have been associated with an objects. A tag can be any kind of Object.
     * The key difference between attachment and tag is that the former implies association by inclusion, while the
     * latter implies associated by reference.
     *
     * @return array<static|LinkInterface>
     */
    public function getTag();

    /**
     * The date and time at which the object was updated
     *
     * @return \DateTime (format "c")
     */
    public function getUpdated();

    /**
     * Identifies one or more links to representations of the object
     *
     * @return array<UriInterface|LinkInterface>
     */
    public function getUrl();

    /**
     * Identifies an entity considered to be part of the public primary audience of an Object
     *
     * @return array<static|LinkInterface>
     */
    public function getTo();

    /**
     * Identifies an Object that is part of the private primary audience of this Object.
     *
     * @return array<static|LinkInterface>
     */
    public function getBto();

    /**
     * Identifies an Object that is part of the public secondary audience of this Object.
     *
     * @return array<static|LinkInterface>
     */
    public function getCc();

    /**
     * Identifies one or more Objects that are part of the private secondary audience of this Object.
     *
     * @return array<static|LinkInterface>
     */
    public function getBcc();

    /**
     * Identifies the MIME media type of the value of the content property. If not specified,
     * the content property is assumed to contain text/html content.
     *
     * @return string
     */
    public function getMediaType(): string;

    /**
     * When the object describes a time-bound resource, such as an audio or video, a meeting, etc, the duration property
     * indicates the object's approximate duration. The value MUST be expressed as an xsd:duration as defined by
     * [ xmlschema11-2], section 3.3.6 (e.g. a period of 5 seconds is represented as "PT5S").
     *
     * @return \DatePeriod|null
     */
    public function getDuration(): ?\DatePeriod;
}
