# js_exam
ITMO University JS exam

Javascript test

    1. The user distributes the points of characteristics of the warrior by pressing the "+" and "-" keys until the free points run out. As long as there are free points, the fight cannot start. The values ​​of the characteristics of the enemy are generated automatically in the range from 1 to 9, in total equal to 15.
    2. When you press the "Fight" key, a duel begins - the sides alternately exchange blows. The delay between blows is 1 second.
    3. When calculating the impact, the characteristics are taken into account as follows:
        a. Strength is the maximum possible Damage. Damage is determined randomly from 0 to Strength
        b. Dexterity - affects the probability of hitting and the probability of dodging a hit. The probability of hitting or dodging a hit is determined randomly from 0 to Dexterity
        c. Health - the number of hit points
    4. When the side strikes, the probabilities of the sides are compared. If the Probability of the side striking is greater than the Probability of the side that takes the strike, then the strike reaches the target, and Damage is deducted from the Health field of the corresponding side.
    5. When striking, the image of the attacking side moves to the side of the image of the defending side and back, imitating the attack.
    6. The results of successive attacks are displayed in the battle listing. The last hit is displayed at the top of the listing.
    7. When the value Health < 0, one of the parties is considered to be the loser. A notification is displayed indicating the winner and the page reloads.
