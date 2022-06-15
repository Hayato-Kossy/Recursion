def findCommon(charArr1,charArr2):
    hashmap_1 = get_hashmap(charArr1)
    hashmap_2 = get_hashmap(charArr2)

    cmd = {}
    for key in hashmap_1:
        if key in hashmap_2:
            cmd[key] = hashmap_1[key] + hashmap_2[key]
    
    if len(cmd) == 0: return "no common"

    min_cmd = min(cmd.values()) 
    for key in cmd:
        if cmd[key] == min_cmd:
            return key

def get_hashmap(charArr):
    hashmap = {}

    for i in range(len(charArr)):
        if charArr[i] not in hashmap:
            hashmap[charArr[i]] = i
    
    return hashmap