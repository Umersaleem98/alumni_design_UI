<section class="py-5">
    <div class="container">
        <div class="row">

            <!-- Left: Simple Calendar -->
            <div class="col-md-4 mb-4">
                <div class="calendar-container p-3 border rounded">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <button id="prevMonth" class="btn btn-outline-danger btn-sm">&lt;</button>
                        <h4 id="monthYear" class="mb-0"></h4>
                        <button id="nextMonth" class="btn btn-outline-danger btn-sm">&gt;</button>
                    </div>
                    <div class="calendar-grid">
                        <!-- Weekday headers -->
                        <div class="weekday">Sun</div>
                        <div class="weekday">Mon</div>
                        <div class="weekday">Tue</div>
                        <div class="weekday">Wed</div>
                        <div class="weekday">Thu</div>
                        <div class="weekday">Fri</div>
                        <div class="weekday">Sat</div>
                        <!-- Days inserted dynamically -->
                    </div>
                </div>
            </div>

            <!-- Right: Event List + Image Gallery -->
            <div class="col-md-8 mb-4 d-flex flex-column">

                <!-- Event List -->
                <h2 class="text-danger mb-3">Upcoming Events</h2>
                <div id="eventList" class="list-group mb-4" style="max-height: 300px; overflow-y: auto;">
                    <!-- Event items inserted here -->
                </div>

                <!-- Image Gallery -->
                <!-- Image Gallery -->
                <h5 class="mb-3">Gallery</h5>
                <div class="row g-2">
                    <div class="col-4 col-md-2">
                        <a href="{{ route('event.index') }}">
                            <img src="templates/img/event-gallary/CAE-alumni.jpeg" class="img-fluid rounded gallery-img"
                                alt="Gallery Image 1" />
                        </a>
                    </div>
                    <div class="col-4 col-md-2">
                        <a href="{{ route('event.index') }}">
                            <img src="templates/img/event-gallary/aftarmeetup.jpeg"
                                class="img-fluid rounded gallery-img" alt="Gallery Image 2" />
                        </a>
                    </div>
                    <div class="col-4 col-md-2">
                        <a href="{{ route('event.index') }}">
                            <img src="templates/img/event-gallary/annual.jpeg" class="img-fluid rounded gallery-img"
                                alt="Gallery Image 3" />
                        </a>
                    </div>
                    <div class="col-4 col-md-2">
                        <a href="{{ route('event.index') }}">
                            <img src="templates/img/event-gallary/global-iftar.jpeg"
                                class="img-fluid rounded gallery-img" alt="Gallery Image 4" />
                        </a>
                    </div>
                    <div class="col-4 col-md-2">
                        <a href="{{ route('event.index') }}">
                            <img src="templates/img/event-gallary/meetup.jpeg" class="img-fluid rounded gallery-img"
                                alt="Gallery Image 5" />
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

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
        border-bottom: 2px solid #FBAF17;
        color: #FBAF17;
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
        border: 2px solid #6b0000;
        font-weight: 700;
    }

    .day.event {
        background-color: #6b0000;
        color: white;
        font-weight: 700;
        cursor: pointer;
    }

    .day.event:hover {
        background-color: #b52b33;
    }

    /* Gallery Images: Fix same size with cropping */
    .gallery-img {
        width: 100%;
        height: 100px;
        object-fit: cover;
        cursor: default;
        display: block;
    }

    /* Make the col-4 and col-md-2 consistent height */
    .row.g-2>div {
        height: 100px;
    }
</style>

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

        let currentDate = new Date(2026, 0, 1); // Start Jan 2026

        function renderCalendar(date) {
            [...calendarGrid.querySelectorAll('.day')].forEach(d => d.remove());

            const year = date.getFullYear();
            const month = date.getMonth();

            monthYearLabel.textContent = date.toLocaleString('default', {
                month: 'long',
                year: 'numeric',
            });

            const firstDayIndex = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const daysInPrevMonth = new Date(year, month, 0).getDate();

            // Previous month's trailing days
            for (let i = firstDayIndex - 1; i >= 0; i--) {
                const dayDiv = document.createElement('div');
                dayDiv.classList.add('day', 'inactive');
                dayDiv.textContent = daysInPrevMonth - i;
                calendarGrid.appendChild(dayDiv);
            }

            // Current month days
            for (let day = 1; day <= daysInMonth; day++) {
                const dayDiv = document.createElement('div');
                dayDiv.classList.add('day');
                const fullDateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(
          day
        ).padStart(2, '0')}`;
                dayDiv.textContent = day;

                const today = new Date();
                if (
                    year === today.getFullYear() &&
                    month === today.getMonth() &&
                    day === today.getDate()
                ) {
                    dayDiv.classList.add('today');
                }

                if (events.some(e => e.date === fullDateStr)) {
                    dayDiv.classList.add('event');
                    dayDiv.title = events
                        .filter(e => e.date === fullDateStr)
                        .map(e => e.title)
                        .join(', ');
                    dayDiv.style.cursor = 'pointer';
                }

                calendarGrid.appendChild(dayDiv);
            }

            // Trailing days of next month to fill the calendar grid
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
