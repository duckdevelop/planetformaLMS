DELETE FROM learning_lo_types
WHERE objectType = 'planetmpv';

INSERT INTO learning_lo_types
(
    objectType,
    className,
    fileName,
    classNameTrack,
    fileNameTrack,
    created_at,
    updated_at
)
VALUES
(
    'planetmpv',
    'Learning_planetmpv',
    'learning.planetmpv.php',
    'Track_planetmpv',
    'track.planetmpv.php',
    NOW(),
    NOW()
);