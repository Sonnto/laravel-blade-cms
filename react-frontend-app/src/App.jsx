import React, { useState, useEffect } from "react";
import Header from "./components/Header";
import Footer from "./components/Footer";
import Home from "./components/Home";
import About from "./components/About";
import Education from "./components/Education";
import Employment from "./components/Employment";
import Project from "./components/Project";
import "./App.css";

function App() {
    const [projects, setProjects] = useState(null);
    const [education, setEducation] = useState(null);
    const [employments, setEmployments] = useState(null);

    useEffect(() => {
        const fetchData = async (type, setter) => {
            try {
                // const url = "";
                const res = await fetch(`./${type}Data.json`);
                const json = await res.json();
                setter(json);
                console.log(json);
                console.log("test success");
            } catch (error) {
                console.log(error);
                console.log("test error");
            }
        };
        fetchData("employments", setEmployments);
        fetchData("education", setEducation);
        fetchData("projects", setProjects);
    }, []);

    //Resume section
    //Employment data
    let employmentArray = [];
    if (employments) {
        for (let i = 0; i < employments.data.length; i++) {
            employmentArray.push(<Employment data={employments.data[i]} />);
        }
    }

    //Education data
    let educationArray = [];
    if (education) {
        // console.log(education);
        // console.log("hello");
        for (let i = 0; i < education.data.length; i++) {
            console.log("In here");
            educationArray.push(<Education data={education.data[i]} />);
            console.log(education.data);
        }
    }

    // Project data
    let projectArray = [];
    if (projects) {
        for (let i = 0; i < projects.data.length; i++) {
            projectArray.push(<Project data={projects.data[i]} />);
        }
    }

    return (
        <>
            <Header />
            <section id="home" className="home-container">
                <Home />
            </section>
            <hr id="division" />
            <section id="about" className="about-container">
                <About />
            </section>
            <hr id="division" />
            <section id="resume" className="resume-container">
                <h2 className="section-heading">Resume</h2>
                <div className="experience-container">
                    <h3 className="experience-type">Employment</h3>
                    {employmentArray}
                </div>
                <div className="experience-container">
                    <h3 className="experience-type">Education</h3>
                    {educationArray}
                </div>
            </section>
            <hr id="division" />
            <section id="projects" className="projects-container">
                <h2 className="section-heading">Projects</h2>
                <div className="projects-content-container">{projectArray}</div>
            </section>
            <Footer />
        </>
    );
}

export default App;
