<?php $page_title = 'Routes'; $page_heading = 'Our Routes'; include 'includes/header.php'; ?>

<main>
    <label for="route-search">Find a route or a centre</label>
<input type="search" id="route-search" placeholder="e.g. Kibiko">
<p id="route-count" aria-live="polite"></p>
    <section id="kiserian">
        <h2>Kiserian Route</h2>
        <p>The lorry runs from 6.30am and again from 4.00pm.</p>
        <ul>
            <li>Olepolos centre</li>
            <li>Kandisi centre</li>
        </ul>
    </section>

    <section id="ngong">
        <h2> Ngong route</h2>
        <p>The lorry runs from 6.00am and again from 3.30pm.</p>
        <ul>
            <li> Kibiko centre</li>
            <li>Matasia centre</li>
            <li>Oloolua centre</li>
        </ul>
    </section>

    <section id="rongai">
        <h2> Rongai route</h2>
        <p>The lorry runs from 6.45am and again from 4.15pm.</p>
        <ul>
            <li>Nkaimurunya centre</li>
            <li>Kware centre</li>
        </ul>
    </section>
    </main>
    <aside>
<h2>Notices</h2>
<ul>
<li>Milk is paid at <strong>KSh 52.00 a litre</strong> from
1 October 2026.</li>
<li>Annual General Meeting: Saturday 17 October, 10 a.m., at the
Kiserian collection centre.</li>
<li>New members: <a href="register.php">apply to join</a>. You need
a national ID and a bank account.</li>
</ul>
</aside>

<?php include 'includes/footer.php'; ?>
