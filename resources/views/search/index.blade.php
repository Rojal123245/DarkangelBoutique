<style>
    h2 {
        position: relative;
        top: calc(50vh - 50px);
        height: 56px;
        line-height: 56px;
        padding: 20px 0;
        text-align: center;
        font-weight: bold;
    }
</style>
@if(isset($message))
    <h2>{{$message}}</h2>
@endif
