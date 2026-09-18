#!/bin/bash
set -e

COMMIT=050aa80
SRC_PREFIX="UNI/backend/classe/"
DEST_PREFIX="backend/"

git ls-tree -r --name-only $COMMIT -- "$SRC_PREFIX" | while read -r filepath; do
    relpath="${filepath#$SRC_PREFIX}"
    destpath="${DEST_PREFIX}${relpath}"
    mkdir -p "$(dirname "$destpath")"
    git show "$COMMIT:$filepath" > "$destpath"
    echo "Restored: $destpath"
done