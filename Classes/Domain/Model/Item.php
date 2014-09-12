<?php
class Tx_YagItemViewCount_Domain_Model_Item extends Tx_Yag_Domain_Model_Item
{
        /**
         * The view count of an item.
         * @var int
         */
        protected $viewCount;

        /**
         * The last IP address which requests the item.
         * @var string
         */
        protected $lastIpAddress;

        /**
         * Set view count.
         * @param int $viewCount
         */
        public function setViewCount($viewCount) {
            $this->viewCount = $viewCount;
        }

		/**
		 * Get view count.
		 * @return int
		 */	
		public function getViewCount() {
			return $this->viewCount;
		}

        /**
         * Set last IP address.
         * @param string $lastIpAddress
         */
        public function setLastIpAddress($lastIpAddress) {
            $this->lastIpAddress = $lastIpAddress;
        }
	
        /**
         * Get last IP address.
         * @return string
         */
        public function getLastIpAddress() {
            return $this->lastIpAddress;
        }
}