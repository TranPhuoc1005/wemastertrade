import React from 'react'
import MenuSimulated from '../partials/MenuSimulated'
import { LangProps } from '../../../types/common'
import Spreads from '../partials/Spreads'

export default function Symbols({ lang }: LangProps) {
    return (
        <section className="symbols">
            <div className="container">
                <MenuSimulated lang={lang} />
                <div className="symbols__content">
                    <Spreads />
                </div>
            </div>
        </section>
    )
}
