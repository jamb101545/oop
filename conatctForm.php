<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 10.02.2017
 * Time: 18:59
 */



#$errorMessages = [];
#$fileName = 'userComments.dat';



class ContactForm {

    private $uName;
    private $uMail;
    private $uComment;
    private $errorMessages = [];
    private $fileName = 'userComments.dat';

    /**
     * @return null
     */
    public function getErrorMessages()
    {
        return $this->errorMessages;
    }

    /**
     * @param null $errorMessages
     */
    public function setErrorMessages($errorMessages)


    {
        $this->errorMessages[] = $errorMessages;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUName()
    {
        return $this->uName;
    }

    /**
     * @param mixed $uName
     */
    public function setUName($uName)
    {
        $this->uName = $uName;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getUMail()
    {
        return $this->uMail;
    }

    /**
     * @param mixed $uMail
     */
    public function setUMail($uMail)
    {
        $this->uMail = $uMail;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getUComment()
    {
        return $this->uComment;
    }

    /**
     * @param mixed $uComment
     */
    public function setUComment($uComment)
    {
        $this->uComment = $uComment;
        return $this;

    }

public function setComments($data) {

    global $fileName;
    $prevComments = $this->getComments();
    if (($prevComments !== false) && (!empty($prevComments))) {
        $aPrevData = unserialize($prevComments);
    } else {
        $aPrevData = [];
    }
    $data['addedDate'] = date('Y-m-d H:i:s');
    $aNewData = array_merge([$data], $aPrevData);
    echo '<p>Debug all comments: </p><pre>' . var_export($aNewData, 1) . '</pre>';
    $sData = serialize($aNewData);
    file_put_contents($this->getFileName(), $sData);

    }
 public function getComments() {
     #global $fileName;
     if (file_exists($this->getFileName())) {
         return file_get_contents($this->getFileName());

     }

    }
 public function getErrorMsg()
    {
        #global $errorMessages;
        if (! empty($this->getErrorMessages())) {
              foreach ($this->getErrorMessages() as $error) {
                echo '<p class="error">' . $error . '</p>';
            }
        }
    }


   public function displayComments()
    {
        $sComm =$this->getComments();
        if ($sComm !== false) {
            $aComm = unserialize($sComm);
            if (!empty($aComm)) {
                foreach ($aComm as $comm) {
                    echo '<div class="comment">' .
                        '<p><span class="date">' . $comm['addedDate'] . '</span> by <a href="mailto:' . $comm['uMail'] . '">' . $comm['uName'] . '</a>:</p>' .
                        '<div class="comment-text">' . $this->antimat($comm['uComment']) . '</div>'.
                        '</div>';
                }
            }
        }
    }


  public  function antimat($str)
    {
        return str_replace([
            'Choko',
            'test',
        ], [
            'Ch***',
            't***',
        ], $str);
    }

}


$comment = new ContactForm();
if ($_POST) {
    if (empty($_POST['uName'])) {
        $comment->setErrorMessages('Username is empty!') ;
    }
    if (empty($_POST['uMail'])) {
        $comment -> setErrorMessages('User email is empty!');
    } elseif (!filter_var($_POST['uMail'], FILTER_VALIDATE_EMAIL)) {
        $comment ->setErrorMessages('User email has wrong forat!') ;
    }
    if (empty($_POST['uComment'])) {
        $comment->setErrorMessages('User comment is empty!') ;
    }
    if (empty($comment->getErrorMessages())) {

        $comment->setComments($_POST);

    }



}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?=$comment->getErrorMsg()?>

<hr>

<h2>Add your comment</h2>

<form action="" method="post">
    <div>
        <label for="uName">Username *: </label>
        <input type="text" name="uName">
    </div>
    <div>
        <label for="uMail">Email *: </label>
        <input type="email" name="uMail">
    </div>
    <div>
        <label for="uComment">Comment *: </label>
        <textarea name="uComment"></textarea>
    </div>
    <button type="submit">Add comment</button>
</form>
<p>* - required fields</p>

<hr>

<?=$comment->displayComments()?>

</body>
</html>