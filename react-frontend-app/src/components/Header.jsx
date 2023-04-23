function Header() {
    return (
        <header id="header">
            <nav id="nav">
                <div id="menu-tab"></div>
                <div id="menu-toggle">
                    <input name="menu-button-click" type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                    <ul id="menu">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <hr class="nav-division" />
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <hr class="nav-division" />
                        </li>
                        <li>
                            <a href="#resume">Resume</a>
                        </li>
                        <li>
                            <hr class="nav-division" />
                        </li>
                        <li>
                            <a href="#projects">Projects</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    );
}

export default Header;
