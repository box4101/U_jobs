<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header.php"); ?>
<!-------------------------------------------------header------------------------------------->

<div class="sub_content">
    <div class="sel_box">
        <div class="inner">
            <ul class="clearFix">
                <li>
                    <img src="/img/home.png" alt="">
                </li>
                <li style="border-left:none;">
                    <p class="tit">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/cm_select.php"); ?>
                    </p>
                </li>
                <li style="border-left:none;">
                    <select name="" id="" onchange="window.open(value,'_self');">
                        <option value="/page/sub01-1.php" selected>기상기록</option>
                        <option value="/page/sub01-2.php">기상관리팁</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>

    <div class="inner">
        <div class="p01-1">
            <p class="tit">규칙적기상</p>
            <p class="txt">당신은 10년 후 어떤 모습으로 살고 싶은가?</p>

            <div class="sub_menus">
                <ul class="w50">
                    <li class="active"><a href="/page/sub01-1.php">기상기록
                        </a></li>
                    <li><a href="/page/sub01-2.php">기상관리팁
                        </a></li>
                </ul>
            </div>

            <div class="section">
                <p class="tits" style="color:#000">
                    기준 기상
                </p>

                <div id="calendar">
                    <div class="calender-arrow">
                        <span class="dates">
                            2019.10
                        </span>
                        <a href="#prev" class="arrow left">Left</a>
                        <a href="#next" class="arrow right">Right</a>
                        <span>
                            <a href="#none" class="s_btn">오늘</a>
                        </span>
                    </div>
                    <ul class="weekdays">
                        <li>일</li>
                        <li>월</li>
                        <li>화</li>
                        <li>수</li>
                        <li>목</li>
                        <li>금</li>
                        <li>토</li>
                    </ul>

                    <!-- Days from previous month -->

                    <ul class="days">
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">27</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">28</div>
                                <div class="event">
                                    <div class="event-time">
                                        기상 : <span style="color:#fff!important">09:00</span>
                                    </div>
                                </div>
                                <div class="event bg_sky">
                                    <div class="event-time c_000">
                                        취침 : <span>11:00</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">29</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">30</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">31</div>
                            </a>
                        </li>

                        <!-- Days in current month -->

                        <li class="day">
                            <a href="#popup01">
                                <div class="date">1</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">2</div>
                                <div class="event">
                                    <div class="event-time">
                                        기상 : <span style="color:#fff!important">09:00</span>
                                    </div>
                                </div>
                                <div class="event bg_sky">
                                    <div class="event-time c_000">
                                        취침 : <span>11:00</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <!-- Row #2 -->

                    <ul class="days">
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">3</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">4</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">5</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">6</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">7</div>
                                <div class="event">
                                    <div class="event-time">
                                        기상 : <span style="color:#fff!important">09:00</span>
                                    </div>
                                </div>
                                <div class="event bg_sky">
                                    <div class="event-time c_000">
                                        취침 : <span>11:00</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">8</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">9</div>
                            </a>
                        </li>
                    </ul>

                    <!-- Row #3 -->

                    <ul class="days">
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">10</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">11</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">12</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">13</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">14</div>
                                <div class="event">
                                    <div class="event-time">
                                        기상 : <span style="color:#fff!important">09:00</span>
                                    </div>
                                </div>
                                <div class="event bg_sky">
                                    <div class="event-time c_000">
                                        취침 : <span>11:00</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">15</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">16</div>
                            </a>
                        </li>
                    </ul>

                    <!-- Row #4 -->

                    <ul class="days">
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">17</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">18</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">19</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">20</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">21</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">22</div>
                                <div class="event">
                                    <div class="event-time">
                                        기상 : <span style="color:#fff!important">09:00</span>
                                    </div>
                                </div>
                                <div class="event bg_sky">
                                    <div class="event-time c_000">
                                        취침 : <span>11:00</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">23</div>
                            </a>
                        </li>
                    </ul>

                    <!-- Row #5 -->

                    <ul class="days">
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">24</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">25</div>
                                <div class="event">
                                    <div class="event-time">
                                        기상 : <span style="color:#fff!important">09:00</span>
                                    </div>
                                </div>
                                <div class="event bg_sky">
                                    <div class="event-time c_000">
                                        취침 : <span>11:00</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">26</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">27</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">28</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">29</div>
                            </a>
                        </li>
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">30</div>
                            </a>
                        </li>
                    </ul>

                    <!-- Row #6 -->

                    <ul class="days">
                        <li class="day">
                            <a href="#popup01">
                                <div class="date">31</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">1</div> <!-- Next Month -->
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">2</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">3</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">4</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">5</div>
                            </a>
                        </li>
                        <li class="day other-month">
                            <a href="#popup01">
                                <div class="date">6</div>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>


<!------------------------footer---------------------->

<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php"); ?>