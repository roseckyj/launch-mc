<?php

do {

    $items = ["Acacia", "Anvil", "Arrow", "Axe", "Bamboo", "Banner", "Bedrock", "Beetroot", "Bell", "Birch", "Blast Furnace", "Blaze", "Bone", "Book", "Boots", "Bottle", "Bow", "Brewing", "Brick", "Bucket", "Cactus", "Campfire", "Carrot", "Carto", "Cauldron", "Chestplate", "Chorus", "Clock", "Coal", "Cobble", "Cocoa", "Cod", "Compass", "Coral", "Crossbow", "Dark Oak", "Diamond", "Dolphin", "Elytra", "Emerald", "Enchant", "Ender", "Feather", "Fire", "Flint", "Furnace", "Glow", "Gold", "Gravel", "Grind", "Powder", "Hay", "Helmet", "Hoe", "Iron", "Jungle", "Kelp", "Lantern", "Lapis", "Leather", "Leggings", "Lily", "Loom", "Map", "Melon", "Mushroom", "Nautilus", "Nether", "Obsidian", "Pickaxe", "Potato", "Potion", "Prism", "Puffer", "Pumpkin", "Quartz", "Redstone", "Saddle", "Salmon", "Sand", "Sea", "Shears", "Shield", "Shovel", "Slime", "Smith", "Smoker", "Sponge", "Spruce", "Stick", "Stone", "String", "Sugar", "Terra", "Totem", "Trident", "Turtle", "Vine", "Wool", "Zombie"];
    $names = ["Abigail", "Addison", "Adeline", "Alex", "Amelia", "Andrew", "Anna", "Anthony", "Aria", "Athena", "Aubrey", "Aurora", "Ava", "Bella", "Benjo", "Caleb", "Camila", "Carter", "Charlie", "Chloe", "Kristy", "Chris", "Claire", "Connor", "Daniel", "David", "Dylan", "Eleanor", "Beth", "Ella", "Eloise", "Emily", "Ethan", "Evelyn", "Ezra", "Finn", "Gabriel", "Grace", "Hannah", "Harper", "Hazel", "Henry", "Hudson", "Isaac", "Bella", "Ivy", "Jack", "Jackson", "Jacob", "James", "John", "Joseph", "Joshua", "Julian", "Layla", "Leah", "Leo", "Liam", "Lillian", "Lily", "Logan", "Lucas", "Lucy", "Luke", "Luna", "Madison", "Maeve", "Matthew", "Max", "Maya", "Mia", "Michael", "Miles", "Natalie", "Nathan", "Nicholas", "Noah", "Nolan", "Nora", "Oliver", "Olivia", "Oscar", "Owen", "Paisley", "Penelope", "Ruby", "Ryan", "Samuel", "Savannah", "Scarlett", "Seb", "Sophia", "Stella", "Theo", "Vicky", "Violet", "Will", "Zara", "Zoe"];

    $nick = $names[array_rand($names)] . "_" . $items[array_rand($items)];

} while (strlen($nick) > 16);

echo '
{
    "accounts": [
        {
            "active": true,
            "entitlement": {
                "canPlayMinecraft": true,
                "ownsMinecraft": true
            },
            "profile": {
                "capes": [
                ],
                "id": "' . bin2hex(random_bytes(16)) . '",
                "name": "' . $nick . '",
                "skin": {
                    "id": "",
                    "url": "",
                    "variant": ""
                }
            },
            "type": "Offline"
        }
    ],
    "formatVersion": 3
}
';
