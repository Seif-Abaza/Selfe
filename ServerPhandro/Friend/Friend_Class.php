<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Friend_Class
 *
 * @author abaza
 */
class Friend_Class {

    private $UserManger = null;

    function __construct() {
        if (is_null($this->UserManger)) {
            $this->UserManger = new UserMangment();
        }
    }

    function __destruct() {
        if (!is_null($this->UserManger)) {
            unset($this->UserManger);
        }
    }

    public function CountactListFriends() {
        //Invitation SMS with ( INVITATION ) SystemMessage
    }

    public function WhoFriends($UserID) {
        $Check1 = array(
            FILED_FRIENDS_UID => $UserID,
            FILED_FRIENDS_ACCEPT => FRIEND_ACCEPT
        );
        $Check2 = array(
            FILED_FRIENDS_FRIEND => $UserID,
            FILED_FRIENDS_ACCEPT => FRIEND_ACCEPT
        );
        $FCheck1 = array(
            FILED_FRIENDS_UID => $UserID,
            FILED_FRIENDS_ACCEPT => FRIEND_FOLLOWER
        );
        $FCheck2 = array(
            FILED_FRIENDS_FRIEND => $UserID,
            FILED_FRIENDS_ACCEPT => FRIEND_FOLLOWER
        );

        $DataFriend1 = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $Check1);
        $DataFriend2 = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $Check2);
        $DataFriend3 = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $FCheck1);
        $DataFriend4 = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $FCheck2);

        if ((!is_null($DataFriend1)) && ((!is_null($DataFriend2))) && (!is_null($DataFriend3)) && (!is_null($DataFriend4))) {
            return $GLOBALS[CLASS_TOOLS]->MeargArray($DataFriend1, $DataFriend2, $DataFriend3, $DataFriend4);
        } elseif (!is_null($DataFriend1)) {
            return $DataFriend1;
        } elseif (!is_null($DataFriend2)) {
            return $DataFriend2;
        } elseif (!is_null($DataFriend3)) {
            return $DataFriend3;
        } elseif (!is_null($DataFriend4)) {
            return $DataFriend4;
        } else {
            return null;
        }
    }

    public function isFriends($User_ID, $User_Friend_ID) {
        if ($User_Friend_ID == $User_ID) {
            return false;
        }

        $Check = array(
            FILED_FRIENDS_UID => $User_ID,
            FILED_FRIENDS_FRIEND => $User_Friend_ID,
            FILED_FRIENDS_ACCEPT => FRIEND_ACCEPT
        );
        $ORCheck = array(
            FILED_FRIENDS_FRIEND => $User_ID,
            FILED_FRIENDS_UID => $User_Friend_ID,
            FILED_FRIENDS_ACCEPT => FRIEND_ACCEPT
        );
        $FloowCheck = array(
            FILED_FRIENDS_UID => $User_ID,
            FILED_FRIENDS_FRIEND => $User_Friend_ID,
            FILED_FRIENDS_ACCEPT => FRIEND_FOLLOWER
        );
        $FloowORCheck = array(
            FILED_FRIENDS_FRIEND => $User_ID,
            FILED_FRIENDS_UID => $User_Friend_ID,
            FILED_FRIENDS_ACCEPT => FRIEND_FOLLOWER
        );

        if ($Check[FILED_FRIENDS_UID] == $Check[FILED_FRIENDS_FRIEND]) {
            return true;
        }

        if (($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Check)) || ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $ORCheck))) {
            return true;
        }

        if (($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $FloowCheck)) || ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $FloowORCheck))) {
            return true;
        }

        if (!$this->UserManger->isThisUserExist($User_ID)) {
            return false;
        }
        if (!$this->UserManger->isThisUserExist($User_Friend_ID)) {
            return false;
        }

        return false;
    }

    public function Get_User_friends() {
        $Buffer = $ListFriend = array();
        $tmpData = [FILED_PHONE_IMEI => $GLOBALS[CLASS_FILTER]->FilterData(KEY_PHONE_IMEI)];

        $Data = $GLOBALS[CLASS_TOOLS]->removeNull($tmpData);

        if (!is_null($Data)) {
            $Quiry = $GLOBALS[CLASS_DATABASE]->select(TABLE_PHONE, $Data, '', 1);
            if (!is_null($Quiry)) {
                $MY_ID = intval($Quiry[FILED_PHONE_UID]);
                $FRIENDS = $this->WhoFriends($MY_ID);
                if (!is_null($FRIENDS)) {
                    if (is_array($FRIENDS[0])) {
                        foreach ($FRIENDS as $friend) {
                            $FRIEND_ID = $friend[FILED_FRIENDS_FRIEND];
                            $UID = $friend[FILED_FRIENDS_UID];
                            if ($this->isFriends($FRIEND_ID, $UID)) {
                                $tmp = $this->UserManger->WhoIs($UID);
                                $Name = $tmp[KEY_TABLE_USER][FILED_USER_NAME];
                                $Status = $tmp[KEY_TABLE_USER_ONLINE][FILED_USER_ONLINE_STATUS];
                                $InMind = $tmp[KEY_TABLE_USER_ONLINE][FILED_USER_ONLINE_WHAT_IS_IN_YOUR_MIND];

                                $ListFriend = $GLOBALS[CLASS_TOOLS]->removeNull([FILED_USER_ID => $UID, FILED_USER_NAME => $Name, FILED_USER_ONLINE_STATUS => $Status, FILED_USER_ONLINE_WHAT_IS_IN_YOUR_MIND => $InMind]);
                                if (!in_array($ListFriend, $Buffer)) {
                                    array_push($Buffer, $ListFriend);
                                }
                            }
                        }
                    } else {
                        $FRIEND_ID = $FRIENDS[FILED_FRIENDS_FRIEND];
                        $UID = $FRIENDS[FILED_FRIENDS_UID];
                        if ($this->isFriends($FRIEND_ID, $UID)) {
                            $tmp = $this->UserManger->WhoIs($UID);
                            $Name = $tmp[KEY_TABLE_USER][FILED_USER_NAME];
                            $Status = $tmp[KEY_TABLE_USER_ONLINE][FILED_USER_ONLINE_STATUS];
                            $InMind = $tmp[KEY_TABLE_USER_ONLINE][FILED_USER_ONLINE_WHAT_IS_IN_YOUR_MIND];

                            $ListFriend = $GLOBALS[CLASS_TOOLS]->removeNull([FILED_USER_ID => $UID, FILED_USER_NAME => $Name, FILED_USER_ONLINE_STATUS => $Status, FILED_USER_ONLINE_WHAT_IS_IN_YOUR_MIND => $InMind]);
                            if (!in_array($ListFriend, $Buffer)) {
                                array_push($Buffer, $ListFriend);
                            }
                        }
                    }
                    return $Buffer;
                } else {
                    return NOT_FOUND;
                }
            } else {
                return NOT_FOUND;
            }
        } else {
            return FAIL;
        }
    }

    public function Set_Friend() {
        $Data = array(
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
            FILED_FRIENDS_FAVORIT => OFF,
            FILED_FRIENDS_ACCEPT => FRIEND_WAITING
        );

        if ($this->isFriends($Data[FILED_FRIENDS_UID], $Data[FILED_FRIENDS_FRIEND])) {
            return ALREADY_EXISTS;
        }
        if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Data)) {
            return ALREADY_EXISTS;
        }

        $Label = sprintf(MessagesSystem(NEW_FRIEND), $this->UserManger->WhoIs($Data[FILED_FRIENDS_UID], FILED_USER_NAME, KEY_TABLE_USER));

        if ($GLOBALS[CLASS_DATABASE]->insert(TABLE_FRIENDS, $Data)) {
            $this->UserManger->setNotification($Data[FILED_FRIENDS_UID], $Data[FILED_FRIENDS_FRIEND], NOTIF_FRIEND, $Label);
            return SUCCESS;
        } else {
            $this->UserManger->LogERROR("ERROR : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
            return FAIL;
        }
    }

    public function Set_Unfriend() {
        $Data = array(
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND)
        );

        $Check = array(
            FILED_FRIENDS_UID => $Data[FILED_FRIENDS_UID],
            FILED_FRIENDS_FRIEND => $Data[FILED_FRIENDS_FRIEND]
        );
        $ORCheck = array(
            FILED_FRIENDS_FRIEND => $Data[FILED_FRIENDS_UID],
            FILED_FRIENDS_UID => $Data[FILED_FRIENDS_FRIEND]
        );

        if ($Check[FILED_FRIENDS_UID] == $Check[FILED_FRIENDS_FRIEND]) {
            return FAIL;
        }

        if (!$this->isFriends($Data[FILED_FRIENDS_UID], $Data[FILED_FRIENDS_FRIEND])) {
            return FAIL;
        }

        if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Data)) {
            if ($GLOBALS[CLASS_DATABASE]->delete(TABLE_FRIENDS, $Data)) {
                if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $ORCheck)) {
                    if ($GLOBALS[CLASS_DATABASE]->delete(TABLE_FRIENDS, $ORCheck)) {
                        $this->UserManger->LogSUCCESS("Done For set Unfriend", __FUNCTION__, __LINE__);
                        return SUCCESS;
                    } else {
                        $this->UserManger->LogERROR("ERROR can not Delete . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                        return FAIL;
                    }
                } else {
                    return SUCCESS;
                }
            } else {
                $this->UserManger->LogERROR("ERROR can not Delete . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                return FAIL;
            }
        } else {
            return NOT_FRINDS;
        }
    }

    public function Set_Friend_Favorit() {
        $Where = array(
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND)
        );
        $Data = array(
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
            FILED_FRIENDS_FAVORIT => ON
        );

        if (!$this->isFriends($Data[FILED_FRIENDS_UID], $Data[FILED_FRIENDS_FRIEND])) {
            return FAIL;
        }

        if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Where)) {
            if ($GLOBALS[CLASS_DATABASE]->update(TABLE_FRIENDS, $Data, $Where)) {
                return SUCCESS;
            } else {
                $this->UserManger->LogERROR("ERROR can not Update user favorit . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                return FAIL;
            }
        } else {
            $this->UserManger->LogERROR("ERROR : User try to Update favorit but he is not his friend", __FUNCTION__, __LINE__);
            return FAIL;
        }
    }

    public function Set_Friend_Unfavorit() {
        $Where = array(
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND)
        );
        $Data = array(
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
            FILED_FRIENDS_FAVORIT => OFF
        );

        if (!$this->UserManger->isThisUserExist($Data[FILED_FRIENDS_UID])) {
            return FAIL;
        }
        if (!$this->UserManger->isThisUserExist($Data[FILED_FRIENDS_FRIEND])) {
            return FAIL;
        }

        if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Where)) {
            if ($GLOBALS[CLASS_DATABASE]->update(TABLE_FRIENDS, $Data, $Where)) {
                return SUCCESS;
            } else {
                $this->UserManger->LogERROR("ERROR can not Update user favorit . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                return FAIL;
            }
        } else {
            $this->UserManger->LogERROR("ERROR : User try to Update favorit but he is not his friend", __FUNCTION__, __LINE__);
            return FAIL;
        }
    }

    public function Accept_friend() {
        $Data = [
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
            FILED_FRIENDS_ACCEPT => FRIEND_WAITING
        ];
        $Friends = $GLOBALS[CLASS_TOOLS]->removeNull($Data);
        if ($GLOBALS[CLASS_TOOLS]->in_Array($Friends, FILED_FRIENDS_UID, FILED_FRIENDS_FRIEND)) {
            if (!is_null($Friends)) {
                if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Friends)) {
                    $GetWaitingFriend = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $Friends);
                    if (!is_null($GetWaitingFriend)) {
                        $tmpAccept_Friend = $GLOBALS[CLASS_TOOLS]->ChangeValueInArray(FILED_FRIENDS_ACCEPT, FRIEND_ACCEPT, $GetWaitingFriend);
                        $Accept_Friend = $GLOBALS[CLASS_TOOLS]->RemoveKeyInArray(FILED_FRIENDS_DATE, $tmpAccept_Friend);
                        if ($GLOBALS[CLASS_DATABASE]->update(TABLE_FRIENDS, $Accept_Friend, $GetWaitingFriend)) {
                            $Sync = new Syncronization();
                            return $Sync->SyncFriend();
                        } else {
                            $this->UserManger->LogERROR("ERROR can not Update user favorit . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                            return FAIL;
                        }
                    }
                } else {
                    return ALREADY_FRIENDS;
                }
            } else {
                return FAIL;
            }
        } else {
            return FAIL;
        }
    }

    public function Block_friend() {
        $Data = [
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
        ];
        $Friends = $GLOBALS[CLASS_TOOLS]->removeNull($Data);
        if ($GLOBALS[CLASS_TOOLS]->in_Array($Friends, FILED_FRIENDS_UID, FILED_FRIENDS_FRIEND)) {
            if (!is_null($Friends)) {
                if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Friends)) {
                    $GetWaitingFriend = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $Friends);
                    if (!is_null($GetWaitingFriend)) {
                        $tmp = $GLOBALS[CLASS_TOOLS]->ChangeValueInArray(FILED_FRIENDS_ACCEPT, FRIEND_BLOCK, $GetWaitingFriend);
                        $Accept_Friend = $GLOBALS[CLASS_TOOLS]->RemoveKeyInArray(FILED_FRIENDS_DATE, $tmp);
                        if ($GLOBALS[CLASS_DATABASE]->update(TABLE_FRIENDS, $Accept_Friend, $GetWaitingFriend)) {
                            $Sync = new Syncronization();
                            return $Sync->SyncFriend();
                        } else {
                            $this->UserManger->LogERROR("ERROR can not Update user favorit . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                            return FAIL;
                        }
                    }
                } else {
                    return NOT_FRINDS;
                }
            } else {
                return FAIL;
            }
        } else {
            return FAIL;
        }
    }

    public function Unblock_friend() {
        $Data = [
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
            FILED_FRIENDS_ACCEPT => FRIEND_BLOCK
        ];
        $Friends = $GLOBALS[CLASS_TOOLS]->removeNull($Data);
        if ($GLOBALS[CLASS_TOOLS]->in_Array($Friends, FILED_FRIENDS_UID, FILED_FRIENDS_FRIEND)) {
            if (!is_null($Friends)) {
                if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Friends)) {
                    $GetWaitingFriend = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $Friends);
                    if (!is_null($GetWaitingFriend)) {
                        $tmp = $GLOBALS[CLASS_TOOLS]->ChangeValueInArray(FILED_FRIENDS_ACCEPT, FRIEND_ACCEPT, $GetWaitingFriend);
                        $Accept_Friend = $GLOBALS[CLASS_TOOLS]->RemoveKeyInArray(FILED_FRIENDS_DATE, $tmp);
                        if ($GLOBALS[CLASS_DATABASE]->update(TABLE_FRIENDS, $Accept_Friend, $GetWaitingFriend)) {
                            $Sync = new Syncronization();
                            return $Sync->SyncFriend();
                        } else {
                            $this->UserManger->LogERROR("ERROR can not Update user favorit . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                            return FAIL;
                        }
                    }
                } else {
                    return NOT_FRINDS;
                }
            } else {
                return FAIL;
            }
        } else {
            return FAIL;
        }
    }

    public function Follower_friend() {
        $Data = [
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
            FILED_FRIENDS_ACCEPT => FRIEND_WAITING
        ];
        $Friends = $GLOBALS[CLASS_TOOLS]->removeNull($Data);
        if ($GLOBALS[CLASS_TOOLS]->in_Array($Friends, FILED_FRIENDS_UID, FILED_FRIENDS_FRIEND)) {
            if (!is_null($Friends)) {
                if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Friends)) {
                    $GetWaitingFriend = $GLOBALS[CLASS_DATABASE]->select(TABLE_FRIENDS, $Friends);
                    if (!is_null($GetWaitingFriend)) {
                        $tmp = $GLOBALS[CLASS_TOOLS]->ChangeValueInArray(FILED_FRIENDS_ACCEPT, FRIEND_FOLLOWER, $GetWaitingFriend);
                        $Accept_Friend = $GLOBALS[CLASS_TOOLS]->RemoveKeyInArray(FILED_FRIENDS_DATE, $tmp);
                        if ($GLOBALS[CLASS_DATABASE]->update(TABLE_FRIENDS, $Accept_Friend, $GetWaitingFriend)) {
                            $Sync = new Syncronization();
                            return $Sync->SyncFriend();
                        } else {
                            $this->UserManger->LogERROR("ERROR can not Update user favorit . MySQL : " . $GLOBALS[CLASS_DATABASE]->ReturnError(), __FUNCTION__, __LINE__);
                            return FAIL;
                        }
                    } else {
                        return NOT_FRINDS;
                    }
                } else {
                    return NOT_FRINDS;
                }
            } else {
                return FAIL;
            }
        } else {
            return FAIL;
        }
    }

    public function Refused_friend() {
        $Data = [
            FILED_FRIENDS_UID => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_UID),
            FILED_FRIENDS_FRIEND => $GLOBALS[CLASS_FILTER]->FilterData(KEY_FRIENDS_FRIEND),
            FILED_FRIENDS_ACCEPT => FRIEND_WAITING
        ];
        $Friends = $GLOBALS[CLASS_TOOLS]->removeNull($Data);
        if ($GLOBALS[CLASS_TOOLS]->in_Array($Friends, FILED_FRIENDS_UID, FILED_FRIENDS_FRIEND)) {
            if (!is_null($Friends)) {
                if ($GLOBALS[CLASS_DATABASE]->isExist(TABLE_FRIENDS, $Friends)) {
                    if ($GLOBALS[CLASS_DATABASE]->delete(TABLE_FRIENDS, $Friends, 1)) {
                        $Sync = new Syncronization();
                        return $Sync->SyncFriend();
                    }
                } else {
                    return NOT_FRINDS;
                }
            } else {
                return FAIL;
            }
        } else {
            return FAIL;
        }
    }

    public function Get_Friends_Post($User_ID) {
        $Buffer = array();
        $Friends = $this->WhoFriends($User_ID);
        //I get User Friends
        if (!is_null($Friends)) {
            if (is_array($Friends[0])) {
                //test for know if is a lot of friend or only one friend
                foreach ($Friends as $friend) { //More than One friend
                    $ID = 0;
                    //this Block for skip user ID himsilf
                    if (($friend[FILED_FRIENDS_UID]) == $User_ID) {
                        $ID = $friend[FILED_FRIENDS_FRIEND];
                    } elseif (($friend[FILED_FRIENDS_FRIEND]) == $User_ID) {
                        $ID = $friend[FILED_FRIENDS_UID];
                    }
                    //Get User friend Post
                    $PostClass = new Post();
                    $Post = $PostClass->Get_Posts_User($ID);

                    if (!is_null($Post)) {
                        array_push($Buffer, $Post);
                    }
                    array_multisort($Buffer, SORT_STRING);
                }
                unset($PostClass);
            } else { //Only One friend
                $ID = 0;
                //this Block for skip user ID himsilf
                if (($Friends[FILED_FRIENDS_UID]) == $User_ID) {
                    $ID = $Friends[FILED_FRIENDS_FRIEND];
                } elseif (($Friends[FILED_FRIENDS_FRIEND]) == $User_ID) {
                    $ID = $Friends[FILED_FRIENDS_UID];
                }
                //Get User friend Post
                $PostClass = new Post();
                $Post = $PostClass->Get_Posts_User($ID);

                if (!is_null($Post)) {
                    array_push($Buffer, $Post);
                }
                array_multisort($Buffer, SORT_STRING);
                unset($PostClass);
            }

            return $Buffer;
        } else {
            return null;
        }
    }

}
