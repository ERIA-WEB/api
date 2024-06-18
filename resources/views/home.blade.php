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
        <!-- Publication -->
        <tr style="background-color: #0F3979; color: #fff;">
            <td></td>
            <td>Publication</td>
            <td></td>
            <td></td>
            <td></td>
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
        <!-- Ends -->
        <!-- News and Views -->
        <tr style="background-color: #0F3979; color: #fff;">
            <td></td>
            <td>News And Views</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get All {News And Views}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/all/news-and-views" target="_blank">
                    {{ env('APP_URL') }}get/all/news-and-views
                </a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By URI {News and Views}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/uri/news-and-views?uri={param}" target="_blank">
                    {{ env('APP_URL') }}get/uri/news-and-views?uri={param}
                </a>
            </td>
            <td>
                parameter is: uri => {visit-of-meti-minister-of-japan-he-mr-masayuki-naoshima}
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By ID {News And Views}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/id/news-and-views?article_id={param}" target="_blank">
                    {{ env('APP_URL') }}get/id/news-and-views?article_id={param}
                </a>
            </td>
            <td>parameter is: article_id => {3961}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By Categories {News And Views}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/category/news-and-views?category={param}" target="_blank">
                    {{ env('APP_URL') }}get/category/news-and-views?category={param}
                </a>
            </td>
            <td>parameter is: category => {opinions,in-the-news,press-releases,siia-insights,call-for-proposals,news}
                OR {opinions}
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get {Categories) in {News And Views}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/categories/news-and-views" target="_blank">
                    {{ env('APP_URL') }}get/categories/news-and-views
                </a>
            </td>
            <td>parameter is:</td>
        </tr>
        <!-- Ends -->
        <!-- Database and Programmes -->
        <tr style="background-color: #0F3979; color: #fff;">
            <td></td>
            <td>Database and Programmes</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get All {Database And Programmes}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/all/database-and-programmes" target="_blank">
                    {{ env('APP_URL') }}get/all/database-and-programmes
                </a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By URI {Database And Programmes}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/uri/database-and-programmes?uri={param}" target="_blank">
                    {{ env('APP_URL') }}get/uri/database-and-programmes?uri={param}
                </a>
            </td>
            <td>
                parameter is: uri => {signing-of-mou-between-eria-and-universiti-brunei-darussalam}
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By ID {Database And Programmes}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/id/database-and-programmes?article_id={param}" target="_blank">
                    {{ env('APP_URL') }}get/id/database-and-programmes?article_id={param}
                </a>
            </td>
            <td>parameter is: article_id => {8942}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By Categories {Database And Programmes}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/category/database-and-programmes?category={param}" target="_blank">
                    {{ env('APP_URL') }}get/category/database-and-programmes?category={param}
                </a>
            </td>
            <td>parameter is: category =>
                {eria-digital-innovation-and-sustainable-economy-centre,healthcare-unit,regional-knowledge-centre-for-marine-plastic-debris,medical-excellence-in-asia}
                OR {eria-digital-innovation-and-sustainable-economy-centre}
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get {Categories) in {Database And Programmes}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/categories/database-and-programmes" target="_blank">
                    {{ env('APP_URL') }}get/categories/database-and-programmes
                </a>
            </td>
            <td>parameter is:</td>
        </tr>
        <!-- Ends -->
        <!-- Events  -->
        <tr style="background-color: #0F3979; color: #fff;">
            <td></td>
            <td>Events</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get All {Events}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/all/events" target="_blank">
                    {{ env('APP_URL') }}get/all/events
                </a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By URI {Events}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/uri/events?uri={param}" target="_blank">
                    {{ env('APP_URL') }}get/uri/events?uri={param}
                </a>
            </td>
            <td>
                parameter is: uri => {good-regulatory-practice-for-services-in-the-digital-era}
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By ID {Events}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/id/events?article_id={param}" target="_blank">
                    {{ env('APP_URL') }}get/id/events?article_id={param}
                </a>
            </td>
            <td>parameter is: article_id => {8914}</td>
        </tr>
        <!-- Ends -->
        <!-- Database and Programmes -->
        <tr style="background-color: #0F3979; color: #fff;">
            <td></td>
            <td>Multimedia</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get All {Multimedia}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/all/multimedia" target="_blank">
                    {{ env('APP_URL') }}get/all/multimedia
                </a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By URI {Multimedia}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/uri/multimedia?uri={param}" target="_blank">
                    {{ env('APP_URL') }}get/uri/multimedia?uri={param}
                </a>
            </td>
            <td>
                parameter is: uri => {Ensuring-Digital-Transformation-Development-for-All}
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get By ID {Multimedia}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/id/multimedia?article_id={param}" target="_blank">
                    {{ env('APP_URL') }}get/id/multimedia?article_id={param}
                </a>
            </td>
            <td>parameter is: article_id => {8151}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Get {Categories) in {Multimedia}</td>
            <td>
                <a href="{{ env('APP_URL') }}get/categories/multimedia" target="_blank">
                    {{ env('APP_URL') }}get/categories/multimedia
                </a>
            </td>
            <td>parameter is: {webinar, video, podcasts}</td>
        </tr>
        <!-- Ends -->
        <tr style="background-color: #0F3979; color: #fff;">
            <td></td>
            <td>Mega Menu</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Research Areas</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Programmes</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Publications</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Updates</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Events</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Multimedia</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>About Us</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>People</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Press Room</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Contact</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Searching</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <!-- Module AZEC -->
        <tr style="background-color: #0F3979; color: #fff;">
            <td>AZEC Module</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>About</td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Work</td>
            <td><a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Alliances</td>
            <td>
                <a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>Grapich Result</td>
            <td>
                <a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_URL') }}</a>
            </td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>