import React from "react"
import { graphql, StaticQuery } from "gatsby"
import Img from "gatsby-image"

import Layout from "../components/layout"
import SEO from "../components/seo"

import "../utils/normalize.css"
import "../utils/css/screen.css"

const AboutPage = ({ data }, location) => {
  const siteTitle = data.site.siteMetadata.title

  return (
    <Layout title={siteTitle}>
      <SEO title="About" keywords={[`blog`, `gatsby`, `javascript`, `react`]} />

      <article className="post-content page-template no-image">
        <div className="post-content-body">
          <h2 id="clean-minimal-and-deeply-customisable-london-is-a-theme-made-for-people-who-appreciate-simple-lines-">
            Not your typical programmer
          </h2>
          <figure className="kg-card kg-image-card">
            <Img
              fluid={data.benchAccounting.childImageSharp.fluid}
              className="kg-image"
            />
            <figcaption>Finally graduated and I'm feeling so guuddddddd:D</figcaption>
          </figure>
          <h3 id="dynamic-styles">Name's Kit.</h3>
          <p>
            I am a fresh graduate from HKUST, class of 2021. My major is Computer Engineering (CPEG), and I am also doing a business minor.
          </p>
          <p>
            I am a big fan of coffee and fresh air. I like to hike and sometimes going to the gym. And I always welcome casual hangouts.
          </p>
          <p>
            Experienced in full-stack web development, however, I am also eager to explore beyond my strengths.
            I am open for various opportunities, especially blockchain and FinTech.
            I am industry focused, which makes me motivated in trying everything in the right environment.
            {/* Both post and page templates are light and minimal, with all the
            focus on the content while the design of the theme gets out of the
            way. Beneath the hood, London enjoys the full power of the{" "}
            <a href="https://docs.ghost.org/api/handlebars-themes/">
              Ghost Handlebars Theme API
            </a>{" "}
            to provide limitless customisation options and dynamic styles. */}
          </p>
          <p>
            This is where I share my previous work. Occasionally, I may also upload some blogs of technology, business insights, or even my daily life.
            {/* Don't forget to check out the{" "}
            <a href="https://docs.ghost.org/integrations/">
              Ghost Integrations Directory
            </a>{" "}
            for more ways to integrate Ghost with your favourite services. */}
          </p>
          <a 
            target="_blank"
            rel="noopener noreferrer"
            href={'/portfolio-revamp/resume.pdf'}
          >
          <button>My CV (May 2022)</button>
          </a>
        </div>
      </article>
    </Layout>
  )
}

const indexQuery = graphql`
  query {
    site {
      siteMetadata {
        title
      }
    }
    benchAccounting: file(
      relativePath: { eq: "me.jpg" }
    ) {
      childImageSharp {
        fluid(maxWidth: 1360) {
          ...GatsbyImageSharpFluid
        }
      }
    }
  }
`

export default props => (
  <StaticQuery
    query={indexQuery}
    render={data => (
      <AboutPage location={props.location} data={data} {...props} />
    )}
  />
)
