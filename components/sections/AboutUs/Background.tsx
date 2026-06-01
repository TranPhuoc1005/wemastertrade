"use client";

import Image from "next/image";
import React from "react";
import { Autoplay, Pagination } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/react";

const officeItems = [
    {
        alt: "WeMasterTrade Southeast Asia",
        image: "/images/off-1.jpg",
        sub: "WeMasterTrade Southeast Asia",
        title: "Where The Future Begins",
        youtubeId: "rtatBe1ZQ0k",
    },
    {
        alt: "Canada Office",
        image: "/images/off-2.jpg",
        sub: "WeMasterTrade Dubai",
        title: "Where The Future Begins",
        youtubeId: "Gwd3t94gGeE",
    },
    {
        alt: "Dubai Office",
        image: "/images/off-3.jpg",
        sub: "WeMasterTrade Canada",
        title: "Building The Future Of Trading",
        youtubeId: "hMIrZSsSAag",
    },
];

export default function Background() {
    return (
        <section className="background">
            <div className="container">
                <div className="title center">
                    <p className="title__sub">Our offices</p>
                    <h3>WeMasterTrade <span>Background</span></h3>
                </div>
                <div className="office">
                    <div className="office__frame border__glassed">
                        <Swiper
                            autoplay={{
                                delay: 3500,
                                disableOnInteraction: false,
                            }}
                            breakpoints={{
                                769: {
                                    slidesPerView: 2,
                                    spaceBetween: 60,
                                },
                                993: {
                                    slidesPerView: 3,
                                    spaceBetween: 116,
                                },
                            }}
                            centeredSlides={false}
                            className="office__content"
                            loop
                            modules={[Autoplay, Pagination]}
                            pagination={{
                                clickable: true,
                            }}
                            slidesPerView={1}
                            spaceBetween={40}>
                            {officeItems.map((item) => (
                                <SwiperSlide className="item" key={item.youtubeId}>
                                    <div className="certificates__video img lightbox-item" data-youtube-id={item.youtubeId}>
                                        <Image loading="lazy" src={item.image} width={389} height={235} alt={item.alt} />
                                    </div>
                                    <div className="cnt">
                                        <div className="ttl">
                                            <p className="sub">{item.sub}</p>
                                            <h4>{item.title}</h4>
                                        </div>
                                    </div>
                                </SwiperSlide>
                            ))}
                        </Swiper>
                    </div>
                </div>
            </div>
        </section>
    );
}
