<?php

namespace AppBundle\Core\Service;

use AppBundle\Entity\SocialProfile;
use AppBundle\Entity\UserProfile;
use AppBundle\Entity\User;
use AppBundle\Entity\UserPreference;

/**
 * APIs related to the user.
 *
 * @author Vivek Ranjan
 */
interface UserServiceInterface {
	
	/**
	 * Saves the user profile
	 *
	 * @param UserProfile $userProfile
	 *        	The UserProfile to be saved.
	 */
	public function saveUserProfile(UserProfile $userProfile);
	
	/**
	 * Save the social profile.
	 * 
	 * @param SocialProfile $socialProfile        	
	 */
	public function saveSocialProfile(SocialProfile $socialProfile);
	
	public function getPostingCateogiresForUser(User $user);
	
	/**
	 * 
	 * @param User $user
	 * @param int $postingCategoryId
	 */
	public function addPostingCategory(User $user, $postingCategoryId);
	
	/**
	 * 
	 * @param User $user
	 * @param string $preferenceKey the preference to fetch
	 */
	public function getUserPreference(User $user, $preferenceKey);
	
	/**
	 * @param UserPreference $userPreference
	 */
	public function setUserPreference(UserPreference $userPreference);
	
	/**
	 * Get all existing preferences for user
	 * @param User $user
	 * @return array
	 */
	public function getUserPreferences(User $user);
	
	/**
	 * @return array
	 */
	public function getAllUserPreferenceTypes();
}