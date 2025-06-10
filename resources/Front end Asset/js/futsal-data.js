const futsals = [
    {
        id: 1,
        name: "Bfit Futsal",
        location: "Pokhara, Ram Krishna tole",
        image: "Asset/image/bfit.jpg",
        thumbnail: "Asset/image/20250123_monocle_ecom_arpenteu-67eacdb6a66c8.jpg",
        about: "Bfit Futsal offers a premium playing experience in Pokhara with top-notch turf and lighting. Ideal for evening matches and tournaments.",
        amenities: [
            { icon: "bi-play-circle", name: "5-a-side" },
            { icon: "bi-droplet", name: "Shower" },
            { icon: "bi-wifi", name: "WiFi" },
            { icon: "bi-cup-hot", name: "Cafeteria" },
            { icon: "bi-camera", name: "CCTV Monitored" }
        ],
        price: 1500,
        pricing: {
            weekday: 1300,
            "4PM-7PM": 1600,
            "public_holidays_saturday": 1600
        },
        contact: {
            phone: "9876543210",
            location: "Pokhara, Ram Krishna tole"
        }
    },
    {
        id: 2,
        name: "Buddhanagar Futsal",
        location: "Sankhamul, Kathmandu",
        image: "Asset/image/futsal-banner.jpg", // Main banner image
        thumbnail: "Asset/image/20250123_monocle_ecom_arpenteu-67eacdb6a66c8.jpg", // Small image for listing
        about: "Centrally located futsal in Kathmandu Valley with reasonable pricing. Find us using the maps link in the app. Our facility offers a great environment for both casual games and serious training.",
        amenities: [
            { icon: "bi-play-circle", name: "5-a-side" },
            { icon: "bi-droplet", name: "Shower" },
            { icon: "bi-wifi", name: "WiFi" },
            { icon: "bi-p-square", name: "Parking" },
            { icon: "bi-person-badge", name: "Changing Room" }
        ],
        price: 1300,
        pricing: {
            weekday: 1200,
            "4PM-7PM": 1500,
            "public_holidays_saturday": 1500
        },
        contact: {
            phone: "4792002",
            location: "Sankhamul, Kathmandu"
        }
    }
    // Add more futsal data here as needed
];

export default futsals; 