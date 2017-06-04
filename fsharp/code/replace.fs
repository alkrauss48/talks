module Replace

(* Uses .NET's built in String.Replace method *)
let toHackerTalk (phrase:string) =
    phrase.Replace('t', '7').Replace('o', '0')
