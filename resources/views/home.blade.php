<style type="text/css">
h1 {
    color: #0F3979;
    font-family: sans-serif;
    font-size: 2em;
    margin-bottom: 0;
}

table {
    font-family: sans-serif;

}

th,
td {
    padding: .25em .5em;
    text-align: left;

    &:nth-child(2) {
        text-align: right;
    }
}

td {
    border: 1px solid #392390;
}

th {
    background-color: #0F3979;
    color: #fff;
}
</style>
<h1>{{ $indexing }}</h1>

<table class="zigzag">
    <thead>
        <tr>
            <th class="header">Modules</th>
            <th class="header">Pages</th>
            <th class="header">Section</th>
            <th class="header">Path API</th>
            <th class="header">Noted</th>
        </tr>
    </thead>
    <tbody>
        <!-- Module ERIA -->
        <tr>
            <td>ERIA Modules</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Publication</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By URI {Publication}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/uri/publication?uri={param}" target="_blank">
                    {{ env('APP_URL') }}get/uri/publication?uri={param}
                </a>
            </td>
            <td>parameter is: uri => {financial-reforms-in-myanmar-and-japans-engagement}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get All {Publication}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/all/publication" target="_blank">
                    {{ env('APP_URL') }}get/all/publication
                </a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By ID {Publication}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/id/publication?article_id={param}" target="_blank">
                    {{ env('APP_URL') }}get/id/publication?article_id={param}
                </a>
            </td>
            <td>parameter is: article_id => {502}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By Categories {Publication}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/category/publication?category={param}" target="_blank">
                    {{ env('APP_URL') }}get/category/publication?category={param}
                </a>
            </td>
            <td>parameter is: category => {annual-reports,books,co-publications} OR {annual-reports}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get {Categories) in {Publication}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/categories/publication" target="_blank">
                    {{ env('APP_URL') }}get/categories/publication
                </a>
            </td>
            <td>parameter is:</td>
        </tr>
        <tr>
            <td></td>
            <td>News And Views</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Events</td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a>
            </td>
            <td></td>
        </tr>
        <!-- Module AZEC -->
        <tr>
            <td>AZEC Module</td>
            <td></td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>About</td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Work</td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Alliances</td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Grapich Result</td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a>
            </td>
            <td></td>
        </tr>
    </tbody>
</table>