<?php

$items = ["Acacia", "Anvil", "Arrow", "Axe", "Bamboo", "Banner", "Bedrock", "Beetroot", "Bell", "Birch", "Blast Furnace", "Blaze", "Bone", "Book", "Boots", "Bottle", "Bow", "Brewing", "Brick", "Bucket", "Cactus", "Campfire", "Carrot", "Cartography", "Cauldron", "Chestplate", "Chorus", "Clock", "Coal", "Cobblestone", "Cocoa", "Cod", "Compass", "Coral", "Crossbow", "Dark Oak", "Diamond", "Dolphin", "Elytra", "Emerald", "Enchant", "Ender", "Feather", "Firework", "Flint", "Furnace", "Glowstone", "Gold", "Gravel", "Grindstone", "Gunpowder", "Hay", "Helmet", "Hoe", "Iron", "Jungle", "Kelp", "Lantern", "Lapis", "Leather", "Leggings", "Lily", "Loom", "Map", "Melon", "Mushroom", "Nautilus", "Netherite", "Obsidian", "Pickaxe", "Potato", "Potion", "Prismarine", "Pufferfish", "Pumpkin", "Quartz", "Redstone", "Saddle", "Salmon", "Sandstone", "Seagrass", "Shears", "Shield", "Shovel", "Slime", "Smithing", "Smoker", "Sponge", "Spruce", "Stick", "Stone", "String", "Sugar", "Terracotta", "Totem", "Trident", "Turtle", "Vine", "Wool", "Zombie"];
$names = ["Abigail", "Addison", "Adeline", "Alex", "Alexander", "Amelia", "Andrew", "Anna", "Anthony", "Aria", "Athena", "Aubrey", "Aurora", "Ava", "Bella", "Benjamin", "Caleb", "Camila", "Carter", "Charlotte", "Chloe", "Christian", "Christopher", "Claire", "Connor", "Daniel", "David", "Dylan", "Eleanor", "Elizabeth", "Ella", "Eloise", "Emily", "Ethan", "Evelyn", "Ezra", "Finn", "Gabriel", "Grace", "Hannah", "Harper", "Hazel", "Henry", "Hudson", "Isaac", "Isabella", "Ivy", "Jack", "Jackson", "Jacob", "James", "John", "Joseph", "Joshua", "Julian", "Layla", "Leah", "Leo", "Liam", "Lillian", "Lily", "Logan", "Lucas", "Lucy", "Luke", "Luna", "Madison", "Maeve", "Matthew", "Max", "Maya", "Mia", "Michael", "Miles", "Natalie", "Nathan", "Nicholas", "Noah", "Nolan", "Nora", "Oliver", "Olivia", "Oscar", "Owen", "Paisley", "Penelope", "Ruby", "Ryan", "Samuel", "Savannah", "Scarlett", "Sebastian", "Sophia", "Stella", "Theo", "Victoria", "Violet", "William", "Zara", "Zoe"];

$nick = $names[array_rand($names)] . "_" . $items[array_rand($items)];

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
