public function getUsers()
{
   return $this->hasMany(User::className(), ['status_id' => 'status_value']);
}