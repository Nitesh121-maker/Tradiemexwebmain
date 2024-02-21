<table class="table table-responsive table-hover table-rounded">
    <thead>
        <tr>
            <th scope="col" class="table-primary">
                <h4>
                    <b>HS Code</b>
                </h4>
            </th>
            <th scope="col">
                <h4>
                    <b>Description</b>
                </h4>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($chapters as $chapterCode => $chapter)
        <tr>
            <th class="table-primary">
                <a class="text-hover" href="#">{{ $chapterCode }}</a>
            </th>
            <th>
                <a class="text-hover" href="#">{{ $chapter['description'] }}</a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>