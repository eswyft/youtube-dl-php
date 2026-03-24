<?php

declare(strict_types=1);

namespace YoutubeDl\Entity;

use DateTimeImmutable;
use DateTimeInterface;
use Exception;
use JsonException;
use SimpleXMLElement;
use SplFileInfo;

use function libxml_clear_errors;
use function libxml_use_internal_errors;

class Video extends AbstractEntity
{
    protected static array $objectMap = [
        'categories' => Category::class,
        'comments' => Comment::class,
        'formats' => Format::class,
        'requested_formats' => Format::class,
        'requested_subtitles' => Subtitles::class,
        'subtitles' => Subtitles::class,
        'automatic_captions' => Subtitles::class,
        'thumbnails' => Thumbnail::class,
    ];

    public function getError(): ?string
    {
        return $this->get('error');
    }

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getTitle(): ?string
    {
        return $this->get('title');
    }

    public function getUrl(): ?string
    {
        return $this->get('url');
    }

    public function getExt(): ?string
    {
        return $this->get('ext');
    }

    public function getAltTitle(): ?string
    {
        return $this->get('alt_title');
    }

    public function getDisplayId(): ?string
    {
        return $this->get('display_id');
    }

    public function getUploader(): ?string
    {
        return $this->get('uploader');
    }

    public function getUploaderUrl(): ?string
    {
        return $this->get('uploader_url');
    }

    public function getLicense(): ?string
    {
        return $this->get('license');
    }

    public function getCreator(): ?string
    {
        return $this->get('creator');
    }

    public function getReleaseDate(): ?DateTimeInterface
    {
        return $this->get('release_date');
    }

    public function getTimestamp(): ?int
    {
        $v = $this->get('timestamp');
        return null === $v ? null : (int) $v;
    }

    public function getUploadDate(): ?DateTimeInterface
    {
        return $this->get('upload_date');
    }

    public function getUploaderId(): ?string
    {
        return $this->get('uploader_id');
    }

    public function getChannel(): ?string
    {
        return $this->get('channel');
    }

    public function getChannelId(): ?string
    {
        return $this->get('channel_id');
    }

    public function getChannelUrl(): ?string
    {
        return $this->get('channel_url');
    }

    public function getChannelFollowerCount(): ?int
    {
        $v = $this->get('channel_follower_count');
        return null === $v ? null : (int) $v;
    }

    public function getLocation(): ?string
    {
        return $this->get('location');
    }

    public function getDuration(): ?float
    {
        $v = $this->get('duration');
        return null === $v ? null : (float) $v;
    }

    public function getViewCount(): ?int
    {
        $v = $this->get('view_count');
        return null === $v ? null : (int) $v;
    }

    public function getLikeCount(): ?int
    {
        $v = $this->get('like_count');
        return null === $v ? null : (int) $v;
    }

    public function getDislikeCount(): ?int
    {
        $v = $this->get('dislike_count');
        return null === $v ? null : (int) $v;
    }

    public function getRepostCount(): ?int
    {
        $v = $this->get('repost_count');
        return null === $v ? null : (int) $v;
    }

    public function getAverageRating(): ?float
    {
        $v = $this->get('average_rating');
        return null === $v ? null : (float) $v;
    }

    public function getCommentCount(): ?int
    {
        $v = $this->get('comment_count');
        return null === $v ? null : (int) $v;
    }

    public function getAgeLimit(): ?int
    {
        $v = $this->get('age_limit');
        return null === $v ? null : (int) $v;
    }

    public function getIsLive(): bool
    {
        return (bool) $this->get('is_live', false);
    }

    public function getStartTime(): ?int
    {
        $v = $this->get('start_time');
        return null === $v ? null : (int) $v;
    }

    public function getEndTime(): ?int
    {
        $v = $this->get('end_time');
        return null === $v ? null : (int) $v;
    }

    public function getFormat(): ?string
    {
        return $this->get('format');
    }

    public function getFormatId(): ?string
    {
        return $this->get('format_id');
    }

    public function getFormatNote(): ?string
    {
        return $this->get('format_note');
    }

    public function getWidth(): ?int
    {
        $v = $this->get('width');
        return null === $v ? null : (int) $v;
    }

    public function getHeight(): ?int
    {
        $v = $this->get('height');
        return null === $v ? null : (int) $v;
    }

    public function getResolution(): ?string
    {
        return $this->get('resolution');
    }

    public function getTbr(): ?float
    {
        $v = $this->get('tbr');
        return null === $v ? null : (float) $v;
    }

    public function getAbr(): ?int
    {
        $v = $this->get('abr');
        return null === $v ? null : (int) $v;
    }

    public function getAcodec(): ?string
    {
        return $this->get('acodec');
    }

    public function getAsr(): ?int
    {
        $v = $this->get('asr');
        return null === $v ? null : (int) $v;
    }

    public function getVbr(): ?string
    {
        return $this->get('vbr');
    }

    public function getFps(): ?float
    {
        $v = $this->get('fps');
        return null === $v ? null : (float) $v;
    }

    public function getVcodec(): ?string
    {
        return $this->get('vcodec');
    }

    public function getContainer(): ?string
    {
        return $this->get('container');
    }

    public function getFilesize(): ?int
    {
        $v = $this->get('filesize');
        return null === $v ? null : (int) $v;
    }

    public function getFilesizeApprox(): ?int
    {
        $v = $this->get('filesize_approx');
        return null === $v ? null : (int) $v;
    }

    public function getProtocol(): ?string
    {
        return $this->get('protocol');
    }

    public function getExtractor(): ?string
    {
        return $this->get('extractor');
    }

    public function getExtractorKey(): ?string
    {
        return $this->get('extractor_key');
    }

    public function getEpoch(): ?int
    {
        $v = $this->get('epoch');
        return null === $v ? null : (int) $v;
    }

    public function getAutoNumber(): ?int
    {
        $v = $this->get('autonumber');
        return null === $v ? null : (int) $v;
    }

    public function getPlaylist(): ?string
    {
        return $this->get('playlist');
    }

    public function getPlaylistIndex(): ?int
    {
        $v = $this->get('playlist_index');
        return null === $v ? null : (int) $v;
    }

    public function getPlaylistId(): ?string
    {
        return $this->get('playlist_id');
    }

    public function getPlaylistTitle(): ?string
    {
        return $this->get('playlist_title');
    }

    public function getPlaylistUploader(): ?string
    {
        return $this->get('playlist_uploader');
    }

    public function getPlaylistUploaderId(): ?string
    {
        return $this->get('playlist_uploader_id');
    }

    public function getChapter(): ?string
    {
        return $this->get('chapter');
    }

    public function getChapterNumber(): ?int
    {
        $v = $this->get('chapter_number');
        return null === $v ? null : (int) $v;
    }

    public function getChapterId(): ?string
    {
        return $this->get('chapter_id');
    }

    public function getSeries(): ?string
    {
        return $this->get('series');
    }

    public function getSeason(): ?string
    {
        return $this->get('season');
    }

    public function getSeasonNumber(): ?int
    {
        $v = $this->get('season_number');
        return null === $v ? null : (int) $v;
    }

    public function getSeasonId(): ?string
    {
        return $this->get('season_id');
    }

    public function getEpisode(): ?string
    {
        return $this->get('episode');
    }

    public function getEpisodeNumber(): ?int
    {
        $v = $this->get('episode_number');
        return null === $v ? null : (int) $v;
    }

    public function getEpisodeId(): ?string
    {
        return $this->get('episode_id');
    }

    public function getTrack(): ?string
    {
        return $this->get('track');
    }

    public function getTrackNumber(): ?int
    {
        $v = $this->get('track_number');
        return null === $v ? null : (int) $v;
    }

    public function getTrackId(): ?string
    {
        return $this->get('track_id');
    }

    public function getArtist(): ?string
    {
        return $this->get('artist');
    }

    public function getGenre(): ?string
    {
        return $this->get('genre');
    }

    public function getAlbum(): ?string
    {
        return $this->get('album');
    }

    public function getAlbumType(): ?string
    {
        return $this->get('album_type');
    }

    public function getAlbumArtist(): ?string
    {
        return $this->get('album_artist');
    }

    public function getDiscNumber(): ?int
    {
        $v = $this->get('disc_number');
        return null === $v ? null : (int) $v;
    }

    public function getReleaseYear(): ?string
    {
        return $this->get('release_year');
    }

    /**
     * @return array<string, string>
     */
    public function getHttpHeaders(): array
    {
        return $this->get('http_headers', []);
    }

    public function getFilename(): ?string
    {
        return $this->get('_filename');
    }

    /**
     * @return Subtitles[]
     */
    public function getSubtitles(): array
    {
        return $this->get('subtitles', []);
    }

    /**
     * @return Subtitles[]
     */
    public function getRequestedSubtitles(): array
    {
        return $this->get('requested_subtitles', []);
    }

    /**
     * @return Subtitles[]
     */
    public function getAutomaticCaptions(): array
    {
        return $this->get('automatic_captions', []);
    }

    public function getWebpageUrlBasename(): ?string
    {
        return $this->get('webpage_url_basename');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getStretchedRatio(): ?float
    {
        $v = $this->get('stretched_ratio');
        return null === $v ? null : (float) $v;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->get('categories', []);
    }

    /**
     * @return Thumbnail[]
     */
    public function getThumbnails(): array
    {
        return $this->get('thumbnails', []);
    }

    public function getAnnotations(): ?SimpleXMLElement
    {
        return $this->get('annotations');
    }

    public function getWebpageUrl(): ?string
    {
        return $this->get('webpage_url');
    }

    /**
     * @return Format[]
     */
    public function getFormats(): array
    {
        return $this->get('formats', []);
    }

    /**
     * @return Format[]
     */
    public function getRequestedFormats(): array
    {
        return $this->get('requested_formats', []);
    }

    public function getNEntries(): ?int
    {
        $v = $this->get('n_entries');
        return null === $v ? null : (int) $v;
    }

    public function getPreference(): ?int
    {
        $v = $this->get('preference');
        return null === $v ? null : (int) $v;
    }

    public function getFile(): SplFileInfo
    {
        return $this->get('file');
    }

    public function getMetadataFile(): SplFileInfo
    {
        return $this->get('metadataFile');
    }

    /**
     * @return Comment[]
     */
    public function getComments(): array
    {
        return $this->get('comments', []);
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->get('tags', []);
    }

    public function toJson(int $options = JSON_THROW_ON_ERROR): string
    {
        $data = $this->toArray();
        unset($data['file']);
        unset($data['metadataFile']);

        $json = json_encode($data, $options);

        if ($json === false) {
            throw new JsonException(json_last_error_msg());
        }

        return $json;
    }

    protected function convert(array $data): array
    {
        $data = parent::convert($data);

        if (($data['release_date'] ?? null) !== null) {
            $data['release_date'] = DateTimeImmutable::createFromFormat('!Ymd', $data['release_date']);
        }

        if (($data['upload_date'] ?? null) !== null) {
            $data['upload_date'] = DateTimeImmutable::createFromFormat('!Ymd', $data['upload_date']);
        }

        if (!empty($data['annotations'])) {
            $data['annotations'] = $this->convertAnnotations($data['annotations']);
        }

        return $data;
    }

    private function convertAnnotations(string $data): ?SimpleXMLElement
    {
        try {
            libxml_use_internal_errors(true);

            $obj = new SimpleXMLElement($data);
            libxml_clear_errors();

            return $obj;
        } catch (Exception $e) {
            // If for some reason annotations can't be mapped then just ignore this
        }

        return null;
    }
}
