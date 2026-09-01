@php($editing = isset($galleryItem))

<div class="form-row">
    <div class="mb-3 col-md-6">
        <label class="mb-3 text-dark font-weight-medium">Title AR</label>
        <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror"
            value="{{ old('title_ar', $galleryItem->title_ar ?? '') }}">
        @error('title_ar') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3 col-md-6">
        <label class="mb-3 text-dark font-weight-medium">Title EN</label>
        <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror"
            value="{{ old('title_en', $galleryItem->title_en ?? '') }}">
        @error('title_en') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3 col-md-6">
        <label class="mb-3 text-dark font-weight-medium">Type <strong class="text-danger">*</strong></label>
        <select name="type" id="galleryType" class="form-control @error('type') is-invalid @enderror" required>
            <option value="">Choose...</option>
            <option value="image" @selected(old('type', $galleryItem->type ?? '') === 'image')>Image</option>
            <option value="video" @selected(old('type', $galleryItem->type ?? '') === 'video')>Video</option>
        </select>
        @error('type') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3 col-md-6">
        <label class="mb-3 text-dark font-weight-medium">Status <strong class="text-danger">*</strong></label>
        <select name="status" class="form-control @error('status') is-invalid @enderror" required>
            <option value="2" @selected(old('status', $galleryItem->status ?? 2) == 2)>Active</option>
            <option value="1" @selected(old('status', $galleryItem->status ?? 2) == 1)>Inactive</option>
        </select>
        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3 col-md-6">
        <label class="mb-3 text-dark font-weight-medium">Image / Video File <strong class="text-danger">{{ $editing ? '' : '*' }}</strong></label>
        <input type="file" name="file" id="galleryFile" class="form-control @error('file') is-invalid @enderror" {{ $editing ? '' : 'required' }}>
        <small class="text-muted">Images: JPG, PNG, WEBP, GIF (max 10 MB). Videos: MP4, WEBM, OGG, MOV (max 100 MB).</small>
        @error('file') <small class="text-danger d-block">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3 col-md-6" id="posterField">
        <label class="mb-3 text-dark font-weight-medium">Video Poster Image</label>
        <input type="file" name="poster" class="form-control @error('poster') is-invalid @enderror" accept="image/*">
        <small class="text-muted">Recommended for video cards on the home page.</small>
        @error('poster') <small class="text-danger d-block">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3 col-md-6">
        <label class="mb-3 text-dark font-weight-medium">Sort Order</label>
        <input type="number" name="sort_order" min="0" class="form-control @error('sort_order') is-invalid @enderror"
            value="{{ old('sort_order', $galleryItem->sort_order ?? 0) }}">
        @error('sort_order') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    @if ($editing)
        <div class="mb-3 col-md-12">
            <label class="d-block mb-3 text-dark font-weight-medium">Current File</label>
            @if ($galleryItem->type === 'video')
                <video width="360" controls poster="{{ $galleryItem->poster_path ? asset($galleryItem->poster_path) : '' }}">
                    <source src="{{ asset($galleryItem->file_path) }}">
                </video>
            @else
                <img src="{{ asset($galleryItem->file_path) }}" width="360" style="max-height:240px;object-fit:cover;border-radius:10px" alt="">
            @endif
        </div>
    @endif
</div>

<button type="submit" class="btn btn-primary">{{ $editing ? 'Update' : 'Save' }}</button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const type = document.getElementById('galleryType');
        const file = document.getElementById('galleryFile');
        const poster = document.getElementById('posterField');
        function syncType() {
            const isVideo = type.value === 'video';
            poster.style.display = isVideo ? '' : 'none';
            file.setAttribute('accept', isVideo ? 'video/mp4,video/webm,video/ogg,video/quicktime' : 'image/*');
        }
        type.addEventListener('change', syncType);
        syncType();
    });
</script>
