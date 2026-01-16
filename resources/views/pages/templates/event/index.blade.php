@include('layouts.templates.head')
<title>Events</title>

<style>
    .calendar-grid {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 8px;
    }

    .weekday {
        font-weight: 600;
        text-align: center;
        padding-bottom: 6px;
        border-bottom: 2px solid #800000;
        color: #800000;
    }

    .day {
        width: 100%;
        aspect-ratio: 1 / 1;
        text-align: center;
        line-height: 38px;
        border-radius: 8px;
        cursor: default;
        user-select: none;
        transition: background-color 0.25s ease;
        font-weight: 500;
    }

    .day:hover {
        background-color: #f8d7da;
    }

    .day.inactive {
        color: #ccc;
    }

    .day.today {
        border: 2px solid #800000;
        font-weight: 700;
    }

    .day.event {
        background-color: #800000;
        color: white;
        font-weight: 700;
        cursor: pointer;
    }

    .day.event:hover {
        background-color: #b52b33;
    }

    /* Page header background */
    .page-header {
        position: relative;
        /* needed for the overlay positioning */
        min-height: 300px;
        background: url('{{ asset('templates/img/banner/events.jpg') }}') center center no-repeat;
        background-size: cover;
        color: white;
        display: flex;
        align-items: center;
        padding-top: 3rem;
        padding-bottom: 3rem;
        z-index: 0;
    }

    .page-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* black overlay with 50% opacity */
        z-index: -1;
        /* behind the content */
    }


    .carousel img {
        aspect-ratio: 1 / 1;
        object-fit: cover;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
    }

    section img {
        aspect-ratio: 1 / 1;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    /* section img:hover {
        transform: scale(1.05);
    } */

    .alumni-cta {
        background:
            linear-gradient(rgba(23, 34, 77, 0.9), rgba(23, 34, 77, 0.9)),
            url('{{ asset('templates/img/cta-bg.jpg') }}');
        background-size: cover;
        background-position: center;
    }

    .cta-divider {
        height: 1px;
        width: 100%;
        max-width: 700px;
        margin: 0 auto;
        background-color: rgba(255, 255, 255, 0.3);
    }
</style>

<body>

    @include('layouts.templates.header')

    <!-- Page Header -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h2 class="mb-3 animated text-light slideInDown">Alumni Events & Gatherings</h2>
            <p class="mb-3">
                Bringing NUST Alumni together through professional, social, and community events across chapters.
            </p>
            <button class="btn btn-danger">View Upcoming Events</button>
        </div>
    </div>

    <!-- Calendar + Event List -->
    <section class="py-5">

        <div class="container">
            <h1 class="text-center mb-4">Alumni <span style="color: #FBAF17">Event Calendar</span></h1>
            <div class="row g-4">


                <!-- Calendar -->
                <div class="col-md-4">
                    <div class="calendar-container  border rounded" style="max-height:420px; overflow-y:auto;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <button id="prevMonth" class="btn btn-outline-danger btn-sm">&lt;</button>
                            <h4 id="monthYear" class="mb-0 flex-grow-1 text-center"></h4>
                            <button id="nextMonth" class="btn btn-outline-danger btn-sm">&gt;</button>
                        </div>

                        <div class="calendar-grid">
                            <div class="weekday">Sun</div>
                            <div class="weekday">Mon</div>
                            <div class="weekday">Tue</div>
                            <div class="weekday">Wed</div>
                            <div class="weekday">Thu</div>
                            <div class="weekday">Fri</div>
                            <div class="weekday">Sat</div>
                        </div>
                    </div>
                </div>

                <!-- Event List -->
                <div class="col-md-8 d-flex flex-column">
                    <div class="bg-dark p-1 rounded">
                        <h4 class="text-light mx-3">Upcoming Events</h4>
                    </div>


                    <div id="eventList" class="list-group mb-4 flex-grow-1" style="overflow-y:auto; max-height:200px;">
                    </div>

                    <div class="bg-dark p-3 text-center rounded">
                        <span class="text-light me-3">Want to stay updated on upcoming events?</span>
                        <a href="#" class="btn btn-danger " style="border-radius: 8px;">Register on Alumni
                            Portal &gt;</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Instagram-style Post Section -->
    <section class="py-5" style="background-color: #01273E;">
        <div class="container">
            <div class="row align-items-center g-4">

                <!-- Left: Single Image -->
                <div class="col-md-6">
                    <div class="rounded shadow overflow-hidden">
                        <img src="{{ asset('templates/img/social-media.jpeg') }}" class="img-fluid w-100"
                            style="aspect-ratio:1/1; object-fit:cover;" alt="Alumni Event">
                    </div>
                </div>

                <!-- Right: Post Details -->
                <div class="col-md-6 text-light">
                    <h3 class="text-light mb-3">Islamabad Alumni <span style="color: #FBAF17">Meetup 2026</span></h3>

                    <p class="opacity-75 mb-3">
                        📍 Serena Hotel, Islamabad <br>
                        🗓️ 15 January 2026
                    </p>

                    <p>
                        A memorable gathering of NUST alumni from various batches, bringing together
                        professionals, entrepreneurs, and mentors under one roof. The event focused on
                        networking, collaboration, and strengthening alumni relations.
                    </p>

                    <ul class="list-unstyled mt-3">
                        <li>✔ Networking & Panel Discussion</li>
                        <li>✔ Alumni Success Stories</li>
                        <li>✔ Dinner & Social Meetup</li>
                    </ul>

                    <a href="#" class="btn btn-danger mt-3" style="border-radius: 8px;">View Full Event</a>
                </div>

            </div>
        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="container text-center">

            <h1 class=" mb-4">Past Alumni <span style="color: #FBAF17">Events</span></h1>

            <div class="row g-4">

                <!-- Iftar Meetup -->
                <div class="col-md-4">
                    <h3 class=" mb-3">Iftar Meetup</h3>

                    <div class="d-flex justify-content-center align-items-center overflow-hidden rounded"
                        style="height:220px;">
                        <img src="{{ asset('templates/img/events/a.jpeg') }}" alt="Iftar Meetup"
                            class="img-fluid w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>

                <!-- Home Coming -->
                <div class="col-md-4">
                    <h3 class=" mb-3">Home Coming</h3>

                    <div class="d-flex justify-content-center align-items-center overflow-hidden rounded"
                        style="height:220px;">
                        <img src="{{ asset('templates/img/events/b.jpeg') }}" alt="Home Coming"
                            class="img-fluid w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>

                <!-- Alumni Cricket Match -->
                <div class="col-md-4">
                    <h3 class=" mb-3">Alumni Cricket Match</h3>

                    <div class="d-flex justify-content-center align-items-center overflow-hidden rounded"
                        style="height:220px;">
                        <img src="{{ asset('templates/img/events/c.jpeg') }}" alt="Alumni Cricket Match"
                            class="img-fluid w-100 h-100" style="object-fit: cover;">
                    </div>
                </div>

            </div>

            <!-- Social Media Buttons -->
            <div class="mt-4">
                <a href="https://www.instagram.com/nust_alumni_network?igsh=ams3a3dpM2tjZTY0"
                    class="btn btn-danger btn-lg mx-2" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="https://www.facebook.com/NUST.Alumni.Network" class="btn btn-primary btn-lg mx-2"
                    aria-label="Facebook" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a href="https://www.linkedin.com/in/nustalumni?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                    class="btn btn-info btn-lg mx-2" aria-label="LinkedIn" target="_blank"
                    rel="noopener noreferrer">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>


        </div>
    </section>


    <section class="py-5 alumni-cta">
        <div class="container text-center">

            <div class="cta-divider mb-3"></div>

            <h1 class="text-white mb-3">Never Miss an <span style="color: #FBAF17">Alumni Event</span> </h1>

            <p class="text-light opacity-75 mb-4">
                Register on the Alumni Portal for the latest updates on alumni events,
                chapter activities, and gatherings.
            </p>

            <a href="#" class="btn btn-danger px-4 py-2" style="border-radius: 8px;">
                Register on Alumni Portal &nbsp;›
            </a>

            <div class="cta-divider mt-4"></div>

        </div>
    </section>


    @include('layouts.templates.footer')
    @include('layouts.templates.script')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const events = [{
                    title: 'Meeting with Client',
                    date: '2026-01-15'
                },
                {
                    title: 'Project Deadline',
                    date: '2026-01-20'
                },
                {
                    title: 'Team Lunch',
                    date: '2026-01-25'
                },
                {
                    title: 'Product Launch',
                    date: '2026-02-05'
                },
                {
                    title: 'Conference',
                    date: '2026-02-14'
                },
            ];

            const calendarGrid = document.querySelector('.calendar-grid');
            const monthYearLabel = document.getElementById('monthYear');
            const prevBtn = document.getElementById('prevMonth');
            const nextBtn = document.getElementById('nextMonth');
            const eventList = document.getElementById('eventList');
            const galleryModalImg = document.getElementById('galleryModalImg');

            let currentDate = new Date(2026, 0, 1); // Start Jan 2026

            function renderCalendar(date) {
                [...calendarGrid.querySelectorAll('.day')].forEach(d => d.remove());

                const year = date.getFullYear();
                const month = date.getMonth();

                monthYearLabel.textContent = date.toLocaleString('default', {
                    month: 'long',
                    year: 'numeric'
                });

                const firstDayIndex = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const daysInPrevMonth = new Date(year, month, 0).getDate();

                for (let i = firstDayIndex - 1; i >= 0; i--) {
                    const dayDiv = document.createElement('div');
                    dayDiv.classList.add('day', 'inactive');
                    dayDiv.textContent = daysInPrevMonth - i;
                    calendarGrid.appendChild(dayDiv);
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const dayDiv = document.createElement('div');
                    dayDiv.classList.add('day');
                    const fullDateStr =
                        `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                    dayDiv.textContent = day;

                    const today = new Date();
                    if (year === today.getFullYear() && month === today.getMonth() && day === today.getDate()) {
                        dayDiv.classList.add('today');
                    }

                    if (events.some(e => e.date === fullDateStr)) {
                        dayDiv.classList.add('event');
                        dayDiv.title = events.filter(e => e.date === fullDateStr).map(e => e.title).join(', ');
                        dayDiv.addEventListener('click', () => {
                            const eventElem = document.querySelector(`[data-date="${fullDateStr}"]`);
                            if (eventElem) {
                                eventElem.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                                eventElem.classList.add('bg-danger', 'text-white');
                                setTimeout(() => {
                                    eventElem.classList.remove('bg-danger', 'text-white');
                                }, 1500);
                            }
                        });
                        dayDiv.style.cursor = 'pointer';
                    }

                    calendarGrid.appendChild(dayDiv);
                }

                const totalCells = 42;
                const currentCells = firstDayIndex + daysInMonth;
                const trailingDays = totalCells - currentCells;

                for (let i = 1; i <= trailingDays; i++) {
                    const dayDiv = document.createElement('div');
                    dayDiv.classList.add('day', 'inactive');
                    dayDiv.textContent = i;
                    calendarGrid.appendChild(dayDiv);
                }
            }

            function renderEventList() {
                eventList.innerHTML = '';
                if (events.length === 0) {
                    eventList.innerHTML = '<p>No upcoming events.</p>';
                    return;
                }
                events.sort((a, b) => new Date(a.date) - new Date(b.date));
                events.slice(0, 3).forEach(ev => {
                    const item = document.createElement('a');
                    item.href = 'javascript:void(0)';
                    item.className =
                        'list-group-item list-group-item-action d-flex justify-content-between align-items-center';
                    item.setAttribute('data-date', ev.date);
                    item.innerHTML =
                        `<span>${ev.title}</span><span class="badge bg-danger rounded-pill">${ev.date}</span>`;

                    item.addEventListener('click', () => {
                        const [year, month] = ev.date.split('-');
                        currentDate.setFullYear(parseInt(year), parseInt(month) - 1);
                        renderCalendar(currentDate);
                        alert(`Event: ${ev.title}\nDate: ${ev.date}`);
                    });

                    eventList.appendChild(item);
                });
            }

            // Gallery image click to update modal image
            document.querySelectorAll('.gallery-img').forEach(img => {
                img.addEventListener('click', e => {
                    const src = e.target.getAttribute('data-src');
                    galleryModalImg.src = src;
                });
            });

            // Navigation buttons
            prevBtn.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar(currentDate);
            });
            nextBtn.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar(currentDate);
            });

            // Initial render
            renderCalendar(currentDate);
            renderEventList();
        });
    </script>
