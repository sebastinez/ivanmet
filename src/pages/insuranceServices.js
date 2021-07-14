import * as React from "react"
import { Link } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"

import Layout from "../components/layout"
import Seo from "../components/seo"

const InsuranceServicesPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" id="segurosbg" />
    <div className="body-container">
      <div className="secctionfotos" id="segurosprimary" />
      <div className="body-container-header" id="text">
        Seguros de Transporte
      </div>
      <div className="body-container-text">
        <p>
          Ponemos a su disposición la contratación del seguro para la cobertura
          de riesgo de sus productos transportados. Trabajamos con aseguradoras
          de primer nivel que garantizan la responsabilidad en el riesgo.
        </p>
      </div>
    </div>
  </Layout>
)

export default InsuranceServicesPage
