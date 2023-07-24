<div class="media-page">
    @if($manager->allowToolbar())
        @include('mikha-dev.dcat-media-manager::_toolbar')
    @endif

    {!! $manager->renderPanel() !!}
</div>

<script require="@mikha-dev.media-manager" init=".media-page">
    Dcat.mediaManager = $this.MediaManager();
    @if($manager->isEnableBatchActions())
        {!! $manager->fileSelector()->renderSelectorScript() !!}
    @endif
</script>

