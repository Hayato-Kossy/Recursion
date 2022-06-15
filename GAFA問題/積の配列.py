#最大値とresultの各インデックスの比で答えを出してみる

#メインの関数
def productArray(arr):
    #ゼロの個数が2個以上ある場合を例外とする
    if count_zero(arr) == 2:
        return [0] * len(arr)
    max_multi = max_of_multi(arr)
    return is_zero(arr,max_multi) if count_zero(arr) == 1 else isnot_zero(arr,max_multi)

#0が１つの場合に計算する関数
def is_zero(arr,max_multi):
    result = []
    for i in range(len(arr)):
        if arr[i] != 0:
            result.append(0)
        else:
            result.append(max_multi)
    return result

#0が１つもない場合に計算する関数
def isnot_zero(arr,max_multi):
    result = []
    for i in range(len(arr)):
        result.append(max_multi // arr[i])
    return result

#ゼロの個数をチェックする関数
def count_zero(arr):
    cnt = 0
    for i in range(len(arr)):
        if arr[i] == 0:
            cnt+=1
    return cnt

#最大値を出す関数
def max_of_multi(arr):
    ans = 1
    for i in range(len(arr)):
        if arr[i] != 0 :
            ans *= arr[i]
    return ans
    