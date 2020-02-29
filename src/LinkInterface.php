<?php

declare(strict_types=1);

namespace Mitra\ActivityStreams;

use Psr\Http\Message\UriInterface;

/**
 * A Link is an indirect, qualified reference to a resource identified by a URL. The fundamental model for links is
 * established by [ RFC5988]. Many of the properties defined by the Activity Vocabulary allow values that are either
 * instances of Object or Link. When a Link is used, it establishes a qualified relation connecting the subject (the
 * containing object) to the resource identified by the href. Properties of the Link are properties of the reference
 * as opposed to properties of the resource.
 *
 * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-link
 */
interface LinkInterface
{

    /**
     * An absolute IRI to identify this Object.
     *
     * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-id
     *
     * @return UriInterface|null
     */
    public function getId(): ?UriInterface;

    /**
     * Identifies the Object or Link type. Multiple values may be specified.
     *
     * @link https://www.w3.org/TR/activitystreams-vocabulary/#dfn-type
     *
     * @return UriInterface
     */
    public static function getType(): UriInterface;

    /**
     * The target resource pointed to by a Link.
     *
     * @retrun UriInterface
     */
    public function getHref(): UriInterface;

    /**
     * A link relation associated with a Link. The value MUST conform to both the [HTML5] and [RFC5988] "link relation"
     * definitions.
     *
     * In the [HTML5], any string not containing the "space" U+0020, "tab" (U+0009), "LF" (U+000A), "FF" (U+000C),
     * "CR" (U+000D) or "," (U+002C) characters can be used as a valid link relation.
     *
     * @return string|null
     */
    public function getRel(): ?string;

    /**
     * When used on a Link, identifies the MIME media type of the referenced resource.
     *
     * When used on an Object, identifies the MIME media type of the value of the content property. If not specified,
     * the content property is assumed to contain text/html content.
     *
     * @return string
     */
    public function getMediaType(): string;

    /**
     * A simple, human-readable, plain-text name for the object. HTML markup MUST NOT be included. The name MAY be
     * expressed using multiple language-tagged values.
     *
     * @return string|string[]
     */
    public function getName();

    /**
     * Hints as to the language used by the target resource. Value MUST be a [BCP47] Language-Tag.
     *
     * @return string|null
     */
    public function getHreflang(): ?string;

    /**
     * On a Link, specifies a hint as to the rendering height in device-independent pixels of the linked resource.
     *
     * @return int|null
     */
    public function getHeight(): ?int;

    /**
     * On a Link, specifies a hint as to the rendering width in device-independent pixels of the linked resource.
     *
     * @return int|null
     */
    public function getWidth(): ?int;

    /**
     * Identifies an entity that provides a preview of this object.
     *
     * @return static|ObjectInterface
     */
    public function getPreview();
}
